<?php
// Start the session at the beginning of this config file
session_start();

// Database Connection Details
$host = "localhost";
$user = "root";
$password = "";
$db_name = "db_movie"; // Make sure this is the same database name you created

// Establish Connection
$con = mysqli_connect($host, $user, $password, $db_name);

// Check Connection
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
?>