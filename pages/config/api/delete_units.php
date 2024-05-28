<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['units_id'])) {

	$units_id = mysqli_real_escape_string($dbConn, $_GET['units_id']);

	$sql = "DELETE FROM tbl_units WHERE units_id = " . $units_id;
	dbQuery($sql);
}