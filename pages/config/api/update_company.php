<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true)); 

	$company_name = mysqli_real_escape_string($dbConn, $data->company_name);
	$description = mysqli_real_escape_string($dbConn, $data->description);
	
	$sql = "UPDATE tbl_company SET company_name = '" . $company_name . "', description = '" . $description . "' WHERE company_id = " . $data->company_id;
	dbQuery($sql);
}

