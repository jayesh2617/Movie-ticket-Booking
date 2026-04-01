<?php
include('../../config.php');
$id = $_GET['id'];
$status = $_GET['status'];

$stmt = $con->prepare("UPDATE tbl_shows SET r_status = ? WHERE s_id = ?");
$stmt->bind_param("ii", $status, $id);
$stmt->execute();
$stmt->close();
$_SESSION['success'] = "Show status updated successfully.";
header('location:view_shows.php');
?>