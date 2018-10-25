<?php
session_start();

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName ="rimasanketa";

$connection = mysqli_connect($serverName, $userName ,$password , $dbName);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} 
// echo "Connected successfully";

?>