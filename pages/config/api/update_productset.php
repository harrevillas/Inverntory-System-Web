<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$set_code = mysqli_real_escape_string($dbConn, $data->set_code);
	$set_name = mysqli_real_escape_string($dbConn, $data->set_name);
	$total_amount = mysqli_real_escape_string($dbConn, $data->total_amount);
	$set_onhand = mysqli_real_escape_string($dbConn, $data->set_onhand);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);

	
	$sql = "UPDATE tbl_productset SET set_code = '" . $set_code . "', set_name = '" . $set_name . "', total_amount = '" . $total_amount . "', set_onhand = '" . $set_onhand . "', encoded_by = '" . $encoded_by . "' WHERE productset_id = " . $data->productset_id;
	dbQuery($sql);
}

