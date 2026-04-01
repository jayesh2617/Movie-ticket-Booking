<?php
include('config.php');
if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit;
} else {
    $_SESSION['show'] = $_GET['show'];
    $_SESSION['movie'] = $_GET['movie'];
    $_SESSION['theatre'] = $_GET['theatre'];
    header('location:booking.php');
}
?>