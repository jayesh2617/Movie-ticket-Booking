<?php
include('../../config.php');
extract($_POST);

$stmt = $con->prepare("INSERT INTO tbl_screens(t_id, screen_name, seats, charge) VALUES(?, ?, ?, ?)");
$stmt->bind_param("isii", $theatre, $name, $seats, $charge);

if ($stmt->execute()) {
    echo "Screen saved successfully!";
} else {
    echo "Error saving screen: " . $stmt->error;
}
$stmt->close();
?>