<?php
session_start();

$serverName = "localhost";
$userName = "id7612165_admin";
$password = "admin";
$dbName ="id7612165_rimodb";

$connection = mysqli_connect($serverName, $userName ,$password , $dbName);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} 
// echo "Connected successfully";

?>