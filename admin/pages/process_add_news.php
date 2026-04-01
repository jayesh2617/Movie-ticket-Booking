<?php
include('../../config.php');
extract($_POST);

$target_dir = "../../news_images/";
$target_file = $target_dir . basename($_FILES["attachment"]["name"]);

if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
    $attachment_path = "news_images/" . basename($_FILES["attachment"]["name"]);

    $stmt = $con->prepare("INSERT INTO tbl_news (name, cast, news_date, description, attachment) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $cast, $date, $description, $attachment_path);

    if ($stmt->execute()) {
        $_SESSION['success'] = "News added successfully.";
    } else {
        $_SESSION['error'] = "Failed to add news.";
    }
    $stmt->close();
} else {
    $_SESSION['error'] = "Sorry, there was an error uploading your file.";
}
header('location:add_movie_news.php');
?>