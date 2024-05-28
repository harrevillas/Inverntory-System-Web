<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['product_id'])) {

	$product_id = mysqli_real_escape_string($dbConn, $_GET['product_id']);

	$sql = "DELETE FROM tbl_product WHERE product_id = " . $product_id;
	dbQuery($sql);
}