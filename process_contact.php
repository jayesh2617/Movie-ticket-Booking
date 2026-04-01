<?php
include('config.php');
extract($_POST);

$stmt = $con->prepare("INSERT INTO tbl_contact (name, email, mobile, subject) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $mobile, $subject);

if ($stmt->execute()) {
    $_SESSION['success'] = "Your message has been sent successfully.";
} else {
    $_SESSION['error'] = "Failed to send message.";
}
$stmt->close();
header('location:contact.php');
?>