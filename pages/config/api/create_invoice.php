<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$order_id = mysqli_real_escape_string($dbConn, $data->order_id);
	$product = mysqli_real_escape_string($dbConn, $data->product);
	$product_name = mysqli_real_escape_string($dbConn, $data->product_name);
	$encoded_By = mysqli_real_escape_string($dbConn, $data->encoded_By);
	$total_amount = mysqli_real_escape_string($dbConn, $data->total_amount);
	$status = mysqli_real_escape_string($dbConn, $data->status);
	
	$sql = "INSERT INTO  tbl_invoice (`order_id`, `product`, `product_name`, `encoded_By`, `total_amount`, `status`) VALUES('".$order_id."', '".$product."', '".$product_name."', '".$encoded_By."', '".$total_amount."', '".$status."')";
	dbQuery($sql);
}

