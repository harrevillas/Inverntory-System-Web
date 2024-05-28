<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {

	$id = mysqli_real_escape_string($dbConn, $_GET['id']);

	$sql = "DELETE FROM tbl_marketplace WHERE id = " . $id;
	dbQuery($sql);
}