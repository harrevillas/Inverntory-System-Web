<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['sales_id'])) {

	$sales_id = mysqli_real_escape_string($dbConn, $_GET['sales_id']);

	$sql = "DELETE FROM tbl_sales WHERE sales_id = " . $sales_id;
	dbQuery($sql);
}