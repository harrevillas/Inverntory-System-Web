<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['invoice_id'])) {

	$invoice_id = mysqli_real_escape_string($dbConn, $_GET['invoice_id']);

	$sql = "DELETE FROM tbl_invoice WHERE invoice_id = " . $invoice_id;
	dbQuery($sql);
}