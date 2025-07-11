<?php
include "db.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$fname = $data['fname'];
$lname = $data['lname'];
$age = $data['age'];

$sql = "INSERT INTO users (fname, lname, age) VALUES ('$fname', '$lname', '$age')";
if ($conn->query($sql)) {
    echo json_encode(["status" => "success", "message" => "User added successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => $conn->error]);
}
