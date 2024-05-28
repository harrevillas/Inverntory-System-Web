<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['sales_id'])) {

	$sales_id = mysqli_real_escape_string($dbConn, $_GET['sales_id']);

	$sql = "SELECT *, sum(total) as totalsales FROM `tbl_sales` WHERE sales_id = " . $sales_id . " Date_add(now(),interval - 1 month) GROUP BY date_created LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT *, sum(total) as totalsales FROM `tbl_sales` WHERE date_created < Date_add(now(),interval - 1 month) GROUP BY date_created";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
