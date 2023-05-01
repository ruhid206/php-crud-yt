<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
