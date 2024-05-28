<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['sales_id'])) {

	$sales_id = mysqli_real_escape_string($dbConn, $_GET['sales_id']);

	$sql = "SELECT * FROM `tbl_sales` s LEFT JOIN tbl_categories c ON s.category_id = c.category_id WHERE s.sales_id = " . $sales_id . " LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT * FROM `tbl_sales` s LEFT JOIN tbl_categories c ON s.category_id = c.category_id";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
