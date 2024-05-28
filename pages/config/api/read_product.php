<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['product_id'])) {

	$product_id = mysqli_real_escape_string($dbConn, $_GET['product_id']);

	$sql = "SELECT * FROM `tbl_product` p LEFT JOIN tbl_categories c ON p.category_id = c.category_id 
	        LEFT JOIN tbl_units u ON u.units_id = p.units_id 
	        WHERE p.product_id = " . $product_id . " LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT * FROM `tbl_product` p LEFT JOIN tbl_categories c ON p.category_id = c.category_id 
	        LEFT JOIN tbl_units u ON u.units_id = p.units_id ";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
