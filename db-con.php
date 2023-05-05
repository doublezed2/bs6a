<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "my_lib_db";

$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

?>