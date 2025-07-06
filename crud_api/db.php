<?php
$host="localhost";
$user="root";
$password="";
$db_name="crud_api";
$conn=new mysqli($host,$user,$password,$db_name);
if($conn ->connect_error){
    echo "connection failed".$conn ->connect_error;
}

?>