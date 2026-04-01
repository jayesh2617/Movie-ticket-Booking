<?php
include('config.php');
extract($_POST);

if ($stmt = $con->prepare("SELECT * FROM tbl_login WHERE username = ? AND password = ? AND user_type = 2")) {
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row['user_id'];
        header('location:index.php');
    } else {
        $_SESSION['error'] = "Login Failed: Invalid Credentials";
        header('location:login.php');
    }
    $stmt->close();
} else {
    die('Prepared Statement Error: ' . $con->error);
}
?>