<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$name = mysqli_real_escape_string($dbConn, $data->name);

	
	$sql = "UPDATE tbl_units SET name = '" . $name . "' WHERE units_id = " . $data->units_id;
	dbQuery($sql);
}

