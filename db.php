<?php
$connect = mysqli_connect("localhost", "root", "", "coffeemakerdb");

if (!$connect) {
    die("خطا در اتصال به دیتابیس");
}
