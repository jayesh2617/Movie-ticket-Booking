<?php
include('../../config.php');
extract($_POST);

$stmt = $con->prepare("INSERT INTO tbl_show_time(screen_id, name, start_time) VALUES(?, ?, ?)");
$stmt->bind_param("iss", $screen, $sname, $time);

if ($stmt->execute()) {
    echo "Show time added successfully!";
} else {
    echo "Error adding show time: " . $stmt->error;
}
$stmt->close();
?>