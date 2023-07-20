<?php
// Database configuration
$host = 'localhost'; // Usually 'localhost' if the database is on the same server
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'connectcv'; // Database name

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>
