<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['category_id'])) {

	$category_id = mysqli_real_escape_string($dbConn, $_GET['category_id']);

	$sql = "DELETE FROM tbl_categories WHERE category_id = " . $category_id;
	dbQuery($sql);
}