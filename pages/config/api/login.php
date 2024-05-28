<?php
require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['username']) || !isset($data['password'])) {
        http_response_code(400);
        echo json_encode(array("error" => "Username and password are required"));
        exit();
    }

    $username = mysqli_real_escape_string($dbConn, $data['username']);
    $password = $data['password'];

    $sql = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = dbQuery($sql);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        http_response_code(401);
        echo json_encode(array("error" => "Invalid username"));
    } elseif (!password_verify($password, $user['password'])) {
        http_response_code(401);
        echo json_encode(array("error" => "Invalid password"));
    } else {
        // Read the user type from the fetched user data
        $userType = $user['usertype'];

        // Check if user type matches expected
        if ($userType === 'Admin') {
            if ($data['usertype'] !== 'Admin') {
                http_response_code(403);
                echo json_encode(array("error" => "Admin user logging in as Guest"));
                exit();
            }
        } elseif ($userType === 'Guest') {
            if ($data['usertype'] !== 'Guest') {
                http_response_code(403);
                echo json_encode(array("error" => "Guest user logging in as Admin"));
                exit();
            }
        }
        
        echo json_encode(array("message" => "Login successful", "user" => $user));
    }

    exit();
} else {
    http_response_code(405);
    echo json_encode(array("error" => "Method not allowed"));
    exit();
}


?>