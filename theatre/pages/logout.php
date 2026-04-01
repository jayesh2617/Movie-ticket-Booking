<?php
session_start();
unset($_SESSION['theatre']);
header('location:../../admin/index.php');
?>