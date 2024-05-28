<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$cat_name = mysqli_real_escape_string($dbConn, $data->cat_name);
	$cat_description = mysqli_real_escape_string($dbConn, $data->cat_description);
	$cat_encodedby = mysqli_real_escape_string($dbConn, $data->cat_encodedby);
	
	$sql = "UPDATE tbl_categories SET cat_name = '" . $cat_name . "', cat_description = '" . $cat_description . "', cat_encodedby = '" . $cat_encodedby . "' WHERE category_id = " . $data->category_id;
	dbQuery($sql);
}

