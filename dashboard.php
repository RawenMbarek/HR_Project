<?php
// dashboard.php
session_start();
require_once('db_config.php'); // Include the database configuration

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit();
}

// Retrieve the connected user's email from the session
$userEmail = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
    }

    .container {
      max-width: auto;
      margin: 0 auto;
      padding: 20px;
    }

    .logo {
      display: block;
      margin: 0 auto 20px;
      width: 200px;
    }

    .dashboard-container {
      display: flex;
      background-color: #fff; /* White color for the dashboard container */
      color: #000;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .sidebar {
      width: 200px;
      background-color: #FF0000; /* Red color for the sidebar */
      color: #fff;
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      font-weight: bold;
    }

    .dashboard-header {
      padding: 20px;
      background-color: #FF0000; /* Red color for the header */
      color: #fff;
      border-top-right-radius: 8px;
      border-top-left-radius: 8px;
      text-align: center;
    }

    .dashboard-title {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }

    .dashboard-embed {
      padding: 20px;
      width: 100%;
    }

    .sidebar-button {
      margin-bottom: 10px;
      padding: 10px;
      background-color: transparent;
      color: #fff;
      border: none;
      cursor: pointer;
      width: 100%;
      text-align: left;
      font-weight: bold;
    }

    .sidebar-button:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    /* Responsive layout for small screens */
    @media screen and (max-width: 768px) {
      .container {
        padding: 10px;
      }

      .dashboard-container {
        max-width: 100%;
      }
    }
  </style>
</head>
</head>
<body>
  <div class="container">
    <div class="dashboard-container">
      <div class="sidebar">
        <!-- Display the user's email as the name -->
        <p><?php echo $userEmail; ?></p>
        <button class="sidebar-button">Dashboard</button>
        <!-- Logout button to return to the login page -->
        <button class="sidebar-button" onclick="window.location.href = 'login.php';">Logout</button>
      </div>
      <div class="dashboard-embed">
        <!-- Paste the iframe code for the Power BI dashboard here -->
        <iframe title="PFE-RH_Dashboard" width="100%" height="600" src="https://app.powerbi.com/reportEmbed?reportId=dfd84662-52ba-485a-8cf3-a1c04da34bf5&autoAuth=true&ctid=513486ec-6643-4f17-a508-76478311be42" frameborder="0" allowFullScreen="true"></iframe>
      </div>
    </div>
  </div>
</body>
</html>






