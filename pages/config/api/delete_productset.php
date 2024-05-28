<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['productset_id'])) {

	$productset_id  = mysqli_real_escape_string($dbConn, $_GET['productset_id']);

	$sql = "DELETE FROM tbl_productset WHERE productset_id = " . $productset_id;
	dbQuery($sql);
}