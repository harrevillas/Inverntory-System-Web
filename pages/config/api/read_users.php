<?php
require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json");

// Check if request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if user_id is provided in the query string
    if (isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($dbConn, $_GET['user_id']);

        // Fetch user by user_id
        $sql = "SELECT * FROM `tbl_users` WHERE user_id = '$user_id' LIMIT 1";
        $result = dbQuery($sql);
        $row = dbFetchAssoc($result);

        // Return user data if found
        if ($row) {
            echo json_encode($row);
            exit();
        } else {
            http_response_code(404);
            echo json_encode(array("error" => "User not found"));
            exit();
        }
    } else {
        // Fetch all users
        $sql = "SELECT * FROM `tbl_users`";
        $results = dbQuery($sql);
        $rows = array();

        // Fetch all users into an array
        while ($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }

        // Return users array
        echo json_encode($rows);
        exit();
    }
} else {
    // If request method is not GET, return method not allowed error
    http_response_code(405);
    echo json_encode(array("error" => "Method not allowed"));
    exit();
}
?>
