<?php
// auth.php
session_start();
require_once('db_config.php'); // Include the database configuration

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the login credentials against the 'user' table
  $query = "SELECT * FROM user WHERE email='$username' AND password='$password'";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) === 1) {
    // Authentication success
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    // Authentication failed
    header("Location: login.php");
    exit();
  }
}
?>
