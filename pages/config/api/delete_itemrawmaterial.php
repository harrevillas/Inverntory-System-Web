<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['itermrawmaterial_id'])) {

	$itermrawmaterial_id = mysqli_real_escape_string($dbConn, $_GET['itermrawmaterial_id']);

	$sql = "DELETE FROM tbl_itemrawmaterial WHERE itermrawmaterial_id = " . $itermrawmaterial_id;
	dbQuery($sql);
}