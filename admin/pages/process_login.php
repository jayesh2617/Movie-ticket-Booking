<?php
include('../../config.php'); // Note the path
extract($_POST);

if ($stmt = $con->prepare("SELECT * FROM tbl_login WHERE username = ? AND password = ?")) {
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['user_type'] == 0) { // Admin
            $_SESSION['admin'] = $row['id'];
            header('location:index.php'); // Admin dashboard
        } elseif ($row['user_type'] == 1) { // Theatre
            $_SESSION['theatre'] = $row['user_id'];
            header('location:../../theatre/pages/index.php'); // Theatre dashboard
        }
    } else {
        $_SESSION['error'] = "Login Failed: Invalid Credentials";
        header('location:../index.php');
    }
    $stmt->close();
}
?>