<?php
include('config.php');
$id = $_GET['id'];
if (mysqli_query($con, "DELETE FROM tbl_bookings WHERE book_id='$id'")) {
    $_SESSION['success'] = "Booking Cancelled Successfully";
} else {
    $_SESSION['error'] = "Cancellation Failed";
}
header('location:profile.php');
?>