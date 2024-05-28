<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$productset_id = mysqli_real_escape_string($dbConn, $data->productset_id);
	$material_name = mysqli_real_escape_string($dbConn, $data->material_name);
	$amount = mysqli_real_escape_string($dbConn, $data->amount);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "INSERT INTO  tbl_itemrawmaterial (`productset_id`, `material_name`, `amount`, `encoded_by`) VALUES('".$productset_id."', '".$material_name."', '".$amount."', '".$encoded_by."')";
	dbQuery($sql);
}

