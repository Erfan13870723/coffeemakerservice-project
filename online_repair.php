<?php
include("db.php");
include("theme_header.php");

if (!isset($_SESSION['fullname'])) {
    echo '
    <div class="login-alert-box">
        <p>کاربر گرامی، برای ثبت یا پیگیری درخواست‌های تعمیرات، لطفاً ابتدا وارد حساب کاربری خود شوید.</p>
        <a href="login.php">رفتن به صفحه ورود</a>
    </div>';
    include("theme_footer.html");
    exit;
}
?>

<div class="repair-panel-container">
    <div class="repair-panel-title" style="text-align:center;">پنل مدیریت درخواست ها - تعمیرات دستگاه قهوه ساز</div>
    <div class="repair-panel-boxes">
        <div class="repair-box" onclick="location.href='request_add.php'">
            ثبت درخواست جدید
        </div>
        <div class="repair-box" onclick="location.href='request_list.php'">
            پیگیری درخواست‌ها
        </div>
    </div>
</div>

<?php
include("theme_footer.html");
?>