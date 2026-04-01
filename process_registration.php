<?php
include('config.php');
extract($_POST);

// Check if email already exists
$stmt_check = $con->prepare("SELECT * FROM tbl_login WHERE username = ?");
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    $_SESSION['error'] = "Registration Failed: Email already exists.";
    header('location:registration.php');
    exit;
}
$stmt_check->close();

// Insert into registration table
$stmt_reg = $con->prepare("INSERT INTO tbl_registration(name, email, phone, age, gender) VALUES(?, ?, ?, ?, ?)");
$stmt_reg->bind_param("sssss", $name, $email, $phone, $age, $gender);
if ($stmt_reg->execute()) {
    $user_id = $con->insert_id;
    
    // Insert into login table
    $stmt_login = $con->prepare("INSERT INTO tbl_login(user_id, username, password, user_type) VALUES(?, ?, ?, 2)");
    $stmt_login->bind_param("iss", $user_id, $email, $password);
    if ($stmt_login->execute()) {
        $_SESSION['success'] = "Registration successful! Please login.";
        header('location:login.php');
    } else {
        // If login insert fails, you might want to delete the registration entry
        $_SESSION['error'] = "An error occurred during registration.";
        header('location:registration.php');
    }
    $stmt_login->close();
} else {
    $_SESSION['error'] = "An error occurred during registration.";
    header('location:registration.php');
}
$stmt_reg->close();
?>