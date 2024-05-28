<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$productset_id = mysqli_real_escape_string($dbConn, $data->productset_id);
	$material_name = mysqli_real_escape_string($dbConn, $data->material_name);
	$amount = mysqli_real_escape_string($dbConn, $data->amount);
	$encoded_by = mysqli_real_escape_string($dbConn, $data->encoded_by);
	
	$sql = "UPDATE tbl_itemrawmaterial SET productset_id = '" . $productset_id . "', material_name = '" . $material_name . "', amount = '" . $amount . "', encoded_by = '" . $encoded_by . "' WHERE itermrawmaterial_id  = " . $data->itermrawmaterial_id;
	dbQuery($sql);
}

