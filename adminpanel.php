<?php
include("db.php");
include("theme_header.php");

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    echo "<div style='color:red;text-align:center;'>دسترسی غیرمجاز</div>";
    include("theme_footer.html");
    exit;
}
?>

<div class="admin-panel-container">
    <div class="admin-panel-title" style="text-align:center;">پنل مدیریت ادمین سایت</div>
    <div class="admin-panel-boxes">
        <div class="admin-box" onclick="location.href='admin_list.php'">
            مدیریت ادمین‌ها
        </div>
        <div class="admin-box" onclick="location.href='request_manage.php'">
            مدیریت درخواست‌ها
        </div>
        <div class="admin-box" onclick="location.href='commentmng.php'">
            مدیریت نظرات
        </div>
    </div>
</div>

<?php
include("theme_footer.html");
?>