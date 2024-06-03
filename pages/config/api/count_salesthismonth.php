<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['invoice_id'])) {

	$invoice_id = mysqli_real_escape_string($dbConn, $_GET['invoice_id']);

	$sql = "SELECT *, sum(total_amount) as totalsales FROM `tbl_invoice` WHERE invoice_id = " . $invoice_id . " GROUP BY month(date_created) LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT *, sum(total_amount) as totalsales FROM `tbl_invoice` GROUP BY month(date_created)";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
