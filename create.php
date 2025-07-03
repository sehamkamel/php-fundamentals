<?php
include"db.php";
$lname="emad";
$fname="sara";
$age=30;

$sql="INSERT INTO users (lname,fname,age) VALUES ('$lname','$fname','$age')";
if($conn->query(($sql)) == TRUE) {
    echo "new recod created";}
    else{
        echo "error!".$conn->error;
    }
?>