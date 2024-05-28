<?php
require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['f_name']) || !isset($data['username']) || !isset($data['password']) || !isset($data['usertype']) || !isset($data['contact']) || !isset($data['address'])) {
        http_response_code(400);
        echo json_encode(array("error" => "All fields are required"));
        exit();
    }

    $f_name = mysqli_real_escape_string($dbConn, $data['f_name']);
    $username = mysqli_real_escape_string($dbConn, $data['username']);
    $password = password_hash(mysqli_real_escape_string($dbConn, $data['password']), PASSWORD_BCRYPT); // Hashing password
    $usertype = mysqli_real_escape_string($dbConn, $data['usertype']);
    $contact = mysqli_real_escape_string($dbConn, $data['contact']);
    $address = mysqli_real_escape_string($dbConn, $data['address']);

    $sql = "INSERT INTO tbl_users (f_name, username, password, usertype, contact, address) VALUES ('$f_name', '$username', '$password', '$usertype', '$contact', '$address')";
    $result = dbQuery($sql);

    if (!$result) {
        http_response_code(500);
        echo json_encode(array("error" => "Failed to insert user."));
        exit();
    }

    echo json_encode(array("message" => "User added successfully."));
    exit();
} else {
    http_response_code(405);
    echo json_encode(array("error" => "Method not allowed"));
    exit();
}
?>
