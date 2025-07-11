<?php
include "db.php";
$id=$fname = $lname = $age = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
    } else {
        echo "User not found.";
        exit();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: read.php");
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Confirm Delete</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="alert alert-danger">
      <h4 class="alert-heading">Confirm Deletion</h4>
      <p>Are you sure you want to delete this user?</p>
      <hr>
      <ul>
        <li><strong>First Name:</strong> <?= $fname ?></li>
        <li><strong>Last Name:</strong> <?= $lname ?></li>
        <li><strong>Age:</strong> <?= $age ?></li>
      </ul>
      <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="btn btn-danger">Confirm Delete</button>
        <a href="read.php" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</body>
</html>
