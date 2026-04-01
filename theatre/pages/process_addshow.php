<?php
include('../../config.php');
extract($_POST);

$theatre_id = $_SESSION['theatre'];

foreach ($stime as $st_id) {
    $stmt = $con->prepare("INSERT INTO tbl_shows(st_id, theatre_id, movie_id, start_date, status, r_status) VALUES(?, ?, ?, ?, '1', '0')");
    $stmt->bind_param("iiis", $st_id, $theatre_id, $movie, $sdate);
    $stmt->execute();
    $stmt->close();
}

$_SESSION['success'] = "Shows added successfully.";
header('location:get_show.php');
?>