<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$cat_name = mysqli_real_escape_string($dbConn, $data->cat_name);
	$cat_description = mysqli_real_escape_string($dbConn, $data->cat_description);
	$cat_encodedby = mysqli_real_escape_string($dbConn, $data->cat_encodedby);
	
	$sql = "INSERT INTO  tbl_categories (`cat_name`, `cat_description`, `cat_encodedby`) VALUES('".$cat_name."', '".$cat_description."', '".$cat_encodedby."')";
	dbQuery($sql);
}

