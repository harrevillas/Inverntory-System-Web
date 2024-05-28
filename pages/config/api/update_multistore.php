<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$apiUrl = mysqli_real_escape_string($dbConn, $data->apiUrl);
	$apiKey = mysqli_real_escape_string($dbConn, $data->apiKey);
    $apiUsername = mysqli_real_escape_string($dbConn, $data->apiUsername);
    $marketplace = mysqli_real_escape_string($dbConn, $data->marketplace);
    $name = mysqli_real_escape_string($dbConn, $data->name);
    $feed = mysqli_real_escape_string($dbConn, $data->feed);
	
	$sql = "UPDATE tbl_marketplace SET apiUrl = '" . $apiUrl . "', apiKey = '" . $apiKey . "', apiUsername = '" . $apiUsername . "', marketplace = '" . $marketplace . "', name = '" . $name . "', feed = '" . $feed . "' WHERE id = " . $data->id;
	dbQuery($sql);
}

