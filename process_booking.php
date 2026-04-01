<?php
include('config.php');
extract($_POST);

if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit;
}

$user_id = $_SESSION['user'];
$show_id = $_SESSION['show'];
$ticket_id = "BKID" . rand(1000000, 9999999);
$t_id_query = mysqli_query($con, "SELECT theatre_id FROM tbl_shows WHERE s_id = '$show_id'");
$theatre_id = mysqli_fetch_array($t_id_query)['theatre_id'];
$booking_date = date('Y-m-d');

$stmt = $con->prepare("INSERT INTO tbl_bookings(ticket_id, t_id, user_id, show_id, screen_id, no_seats, amount, ticket_date, date, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, 1)");
$stmt->bind_param("siiisiiss", $ticket_id, $theatre_id, $user_id, $show_id, $screen, $seats, $amount, $date, $booking_date);

if ($stmt->execute()) {
    $_SESSION['success'] = "Booking successful!";
    unset($_SESSION['show']);
    unset($_SESSION['movie']);
    header('location:profile.php');
} else {
    $_SESSION['error'] = "Booking failed: " . $stmt->error;
    header('location:booking.php?error=1');
}
$stmt->close();
?>