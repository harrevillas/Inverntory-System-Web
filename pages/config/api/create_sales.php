<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$category_id = mysqli_real_escape_string($dbConn, $data->category_id);
	$sale_quantity = mysqli_real_escape_string($dbConn, $data->sale_quantity);
	$total = mysqli_real_escape_string($dbConn, $data->total);
	$recorded_by = mysqli_real_escape_string($dbConn, $data->recorded_by);

	$sql = "INSERT INTO  tbl_sales (`category_id`, `sale_quantity`, `total`, `recorded_by`) VALUES('".$category_id."', '".$sale_quantity."', '".$total."', '".$recorded_by."')";
	dbQuery($sql);
}

