<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['user_id'])) {

	$user_id = mysqli_real_escape_string($dbConn, $_GET['user_id']);

	$sql = "DELETE FROM tbl_users WHERE user_id = " . $user_id;
	dbQuery($sql);
}