<?php
require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['user_id'])) {
    $user_id = mysqli_real_escape_string($dbConn, $_GET['user_id']);

    $sql = "SELECT * FROM tbl_users WHERE user_id = $user_id LIMIT 1";
    $result = dbQuery($sql);
    
    if (!$result) {
        http_response_code(500);
        echo json_encode(array("error" => "Failed to fetch user."));
        exit();
    }
    
    $row = dbFetchAssoc($result);
    echo json_encode($row);
    exit();
} else {
    $sql = "SELECT * FROM tbl_users";
    $results = dbQuery($sql);
    
    if (!$results) {
        http_response_code(500);
        echo json_encode(array("error" => "Failed to fetch users."));
        exit();
    }
    
    $rows = array();
    while($row = dbFetchAssoc($results)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
    exit();
}
?>
