<?php

require_once '../db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // get posted data
    $data = json_decode(file_get_contents("php://input"), true);

    // Ensure the data contains all necessary fields
    if (isset($data['user_id'], $data['f_name'], $data['username'], $data['password'], $data['usertype'], $data['contact'], $data['address'])) {
        $user_id = mysqli_real_escape_string($dbConn, $data['user_id']);
        $f_name = mysqli_real_escape_string($dbConn, $data['f_name']);
        $username = mysqli_real_escape_string($dbConn, $data['username']);
        $password = password_hash(mysqli_real_escape_string($dbConn, $data['password']), PASSWORD_BCRYPT); // Hashing password
        $usertype = mysqli_real_escape_string($dbConn, $data['usertype']);
        $contact = mysqli_real_escape_string($dbConn, $data['contact']);
        $address = mysqli_real_escape_string($dbConn, $data['address']);
        
        // Prepare the SQL statement
        $sql = "UPDATE tbl_users SET f_name = ?, username = ?, password = ?, usertype = ?, contact = ?, address = ? WHERE user_id = ?";
        
        // Prepare and bind
        if ($stmt = $dbConn->prepare($sql)) {
            $stmt->bind_param("ssssssi", $f_name, $username, $password, $usertype, $contact, $address, $user_id);
            
            // Execute the statement
            if ($stmt->execute()) {
                http_response_code(200);
                echo json_encode(["message" => "User updated successfully"]);
            } else {
                http_response_code(500);
                echo json_encode(["message" => "Error updating user"]);
            }

            // Close the statement
            $stmt->close();
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error preparing statement"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Invalid input"]);
    }
}

?>
