<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

include "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$id    = $data['id'];
$fname = $data['fname'];
$lname = $data['lname'];
$age   = $data['age'];

$sql = "UPDATE users SET fname=?, lname=?, age=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $fname, $lname, $age, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(["message" => "✅ User updated successfully"]);
} else {
    echo json_encode(["message" => "ℹ️ No changes made"]);
}
?>

