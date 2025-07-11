<?php
include "db.php";
$id = $fname = $lname = $age = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="SELECT * FROM users WHERE id=$id";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $fname= $row["fname"];
        $lname= $row["lname"];
        $age= $row["age"];}
        else{
            echo "No Users Found";
        }
    }
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $id = $_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $age = $_POST["age"];
        $sql = "UPDATE users SET fname='$fname', lname='$lname', age='$age' WHERE id=$id";
        if($conn->query($sql)){
            header("Location:read.php");
        exit();
        }
            else{
                echo "Error In Update".$conn->error;}}
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Ubdate Users</title>
                      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
                </head>
              <body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Update Users</h2>
    <form method="POST" action="">
    
      <input type="hidden" name="id" value="<?= $id ?>">

      <div class="row mb-3">
        <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fname" name="fname" value="<?= $fname ?>" required>
        </div>
      </div>

      <div class="row mb-3">
        <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lname" name="lname" value="<?= $lname ?>" required>
        </div>
      </div>

      <div class="row mb-3">
        <label for="age" class="col-sm-2 col-form-label">Age:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="age" name="age" value="<?= $age ?>" required>
        </div>
      </div>

      <div class="row">
        <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-success">Update</button>
          <a href="read.php" class="btn btn-secondary">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
            


