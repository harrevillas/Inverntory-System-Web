<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

    $category_id = mysqli_real_escape_string($dbConn, $data->category_id);
	$sale_quantity = mysqli_real_escape_string($dbConn, $data->sale_quantity);
	$total = mysqli_real_escape_string($dbConn, $data->total);
	$recorded_by = mysqli_real_escape_string($dbConn, $data->recorded_by);
	
	$sql = "UPDATE tbl_sales SET category_id = '" . $category_id . "', sale_quantity = '" . $sale_quantity . "', total = '" . $total . "', recorded_by = '" . $recorded_by . "' WHERE sales_id = " . $data->sales_id;
	dbQuery($sql);
}

