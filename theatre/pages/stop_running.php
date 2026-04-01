<?php
include('../../config.php');
$id = $_GET['id'];

$stmt = $con->prepare("UPDATE tbl_shows SET status = 0 WHERE s_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
$_SESSION['success'] = "Show has been stopped.";
header('location:view_shows.php');
?>