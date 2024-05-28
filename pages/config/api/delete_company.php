<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['company_id'])) {

	$company_id = mysqli_real_escape_string($dbConn, $_GET['company_id']);

	$sql = "DELETE FROM tbl_company WHERE company_id = " . $company_id;
	dbQuery($sql);
}