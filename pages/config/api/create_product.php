<?php
require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $full_name = mysqli_real_escape_string($dbConn, $_POST['full_name']);
  $units_id = mysqli_real_escape_string($dbConn, $_POST['units_id']);
  $category_id = mysqli_real_escape_string($dbConn, $_POST['category_id']);
  $sales_price = mysqli_real_escape_string($dbConn, $_POST['sales_price']);
  $stock_quantity = mysqli_real_escape_string($dbConn, $_POST['stock_quantity']);
  
  $product_img = '';
  if (isset($_FILES['product_img'])) {
    $img_name = $_FILES['product_img']['name'];
    $img_tmp_name = $_FILES['product_img']['tmp_name'];
    $img_size = $_FILES['product_img']['size'];
    $img_error = $_FILES['product_img']['error'];

    if ($img_error === 0) {
      $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
      $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

      if (in_array(strtolower($img_ext), $allowed_ext)) {
        $img_new_name = uniqid('', true) . '.' . $img_ext;
        $img_upload_path = 'uploads/' . $img_new_name;
        move_uploaded_file($img_tmp_name, $img_upload_path);
        $product_img = $img_new_name;
      } else {
        echo json_encode(["message" => "Invalid image format."]);
        exit();
      }
    } else {
      echo json_encode(["message" => "Error uploading image."]);
      exit();
    }
  }

  $sql = "INSERT INTO tbl_product (`full_name`, `units_id`, `category_id`, `sales_price`, `stock_quantity`, `product_img`) 
          VALUES('$full_name', '$units_id', '$category_id', '$sales_price', '$stock_quantity', '$product_img')";
  dbQuery($sql);
  echo json_encode(["message" => "Product added successfully"]);
}
