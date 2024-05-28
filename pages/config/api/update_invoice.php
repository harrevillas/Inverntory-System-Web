<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

    $order_id = mysqli_real_escape_string($dbConn, $data->order_id);
	$product = mysqli_real_escape_string($dbConn, $data->product);		
	$product_name = mysqli_real_escape_string($dbConn, $data->product_name);	
	$encoded_By = mysqli_real_escape_string($dbConn, $data->encoded_By);
	$total_amount = mysqli_real_escape_string($dbConn, $data->total_amount);
	$status = mysqli_real_escape_string($dbConn, $data->status);
	
	
	$sql = "UPDATE `tbl_invoice` SET order_id = '" . $order_id . "', product = '" . $product. "', product_name = '" . $product_name. "', encoded_By = '" . $encoded_By . "', total_amount = '" . $total_amount . "', status = '" . $status . "' WHERE invoice_id = " . $data->invoice_id;
	dbQuery($sql);
}

