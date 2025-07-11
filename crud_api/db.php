<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "crud_api";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}
?>
