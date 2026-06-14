<?php
include "db.php";

if (isset($_POST['send_comment'])) {

    $name    = $_POST['name'];
    $message = $_POST['message'];

    $query = "INSERT INTO `commentstbl`(`name`, `message`) VALUES ('$name','$message')";


    mysqli_query($connect, $query);

    header("Location: index.php?comment=success");
    exit;
}
