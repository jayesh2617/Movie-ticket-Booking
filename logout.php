<?php
// 1. Resume the existing session
session_start();

// 2. Unset all of the session variables
$_SESSION = array();

// 3. Destroy the session completely
session_destroy();

// 4. Redirect the user to the homepage
header("location: index.php");
exit();
?>