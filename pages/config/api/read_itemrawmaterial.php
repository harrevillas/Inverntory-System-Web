<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['itermrawmaterial_id'])) {

	$itermrawmaterial_id = mysqli_real_escape_string($dbConn, $_GET['itermrawmaterial_id']);

	$sql = "SELECT * FROM `tbl_itemrawmaterial` irw LEFT JOIN tbl_productset p ON irw.productset_id = p.productset_id  WHERE irw.itermrawmaterial_id = " . $itermrawmaterial_id . " LIMIT 1";
	$result = dbQuery($sql);
	
	$row = dbFetchAssoc($result);
	
	echo json_encode($row);
} else {
	$sql = "SELECT * FROM `tbl_itemrawmaterial` irw LEFT JOIN tbl_productset p ON irw.productset_id = p.productset_id";
	$results = dbQuery($sql);
	
	$rows = array();
	
	while($row = dbFetchAssoc($results)) {
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
