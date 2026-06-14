<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعمیرات قهوه ساز</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsiveMedia.css">
</head>

<body>
    <header>

        <h1>تعمیرات قهوه ساز</h1>

        <div class="menu-btn" id="m-btn" onclick="toggleMenu()">≡</div>

        <nav id="nav">
            <ul>
                <a href="index.php">خانه</a>
                <a href="najafabad.php">نمایندگی نجف آباد</a>
                <a href="yasouj.php">نمایندگی یاسوج</a>
                <a href="tips.php">نکات دستگاه</a>
                <a href="aboutour.php">درباره ما</a>
                <a href="#contact">ارتباط باما</a>
                <?php
                if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1) { ?>
                    <a href="adminpanel.php">پنل ادمین</a>
                <?php }

                else { ?>
                    <a href="online_repair.php">تعمیرات آنلاین</a>
                <?php } ?>
                <?php
                if (!isset($_SESSION['fullname'])) { ?>
                    <a href="login.php">ورود</a>
                <?php } ?>
                <?php
                if (isset($_SESSION['fullname'])) { ?>
                    <a href="logout.php" onclick="return confirmLogout();">خروج</a>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>