<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$item_code = mysqli_real_escape_string($dbConn, $data->item_code);
	$full_name = mysqli_real_escape_string($dbConn, $data->full_name);
	$units_id = mysqli_real_escape_string($dbConn, $data->units_id);
	$category_id = mysqli_real_escape_string($dbConn, $data->category_id);
	$sales_price = mysqli_real_escape_string($dbConn, $data->sales_price);
	$stock_quantity = mysqli_real_escape_string($dbConn, $data->stock_quantity);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "INSERT INTO  tbl_product (`item_code`, `full_name`, `units_id`, `category_id`, `sales_price`,  `stock_quantity`,  `encoded_by`) 
	        VALUES('".$item_code."', '".$full_name."', '".$units_id."', '".$category_id."', '".$sales_price."', '".$stock_quantity."',  '".$encoded_by."')";
	dbQuery($sql);
}

