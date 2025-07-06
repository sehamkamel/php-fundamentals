<?php
$host="localhost";
$user= "root";
$password= "";
$dbname= "crud_api";
$conn = new mysqli($host,$user,$password,$dbname);
if ($conn->connect_error) {
    echo "connection failed". $conn->connect_error;

}
