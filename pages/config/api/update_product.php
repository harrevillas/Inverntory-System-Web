<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

    $item_code = mysqli_real_escape_string($dbConn, $data->item_code);
	$full_name = mysqli_real_escape_string($dbConn, $data->full_name);
	$units_id = mysqli_real_escape_string($dbConn, $data->units_id);
	$category_id = mysqli_real_escape_string($dbConn, $data->category_id);
	$sales_price = mysqli_real_escape_string($dbConn, $data->sales_price);
	$stock_quantity = mysqli_real_escape_string($dbConn, $data->stock_quantity);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);

	$sql = "UPDATE tbl_product SET item_code = '" . $item_code . "', full_name = '" . $full_name . "', units_id = '" . $units_id . "', category_id = '" . $category_id . "', sales_price = '" . $sales_price . "', stock_quantity = '" . $stock_quantity . "', encoded_by = '" . $encoded_by . "' WHERE product_id = " . $data->product_id;
	dbQuery($sql);
}

