<?php


require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));

	$apiUrl = mysqli_real_escape_string($dbConn, $data->apiUrl);
	$apiKey = mysqli_real_escape_string($dbConn, $data->apiKey);
    $apiUsername = mysqli_real_escape_string($dbConn, $data->apiUsername);
    $marketplace = mysqli_real_escape_string($dbConn, $data->marketplace);
    $name = mysqli_real_escape_string($dbConn, $data->name);
    $feed = mysqli_real_escape_string($dbConn, $data->feed);
	
	$sql = "INSERT INTO  tbl_marketplace(`apiUrl`,`apiKey`,`apiUsername`, `marketplace`, `name`, `feed`) VALUES('" . $apiUrl . "', '". $apiKey . "', '". $apiUsername . "', '". $marketplace ."', '". $name . "', '". $feed ."')";
	dbQuery($sql);
}

