<?php
include("theme_header.php");
include("db.php");

if (!isset($_SESSION["is_admin"])) {
    echo "دسترسی ندارید";
    exit;
}

$result = mysqli_query($connect, "SELECT * FROM `commentstbl`");
?>

<h2 style="text-align: center;">مدیریت نظرات</h2>

<?php
while ($row = mysqli_fetch_array($result)) {
?>

    <div class="comments-management" style="direction: rtl;">
        <?php echo ("نام:") ?>
        <span><?php echo ($row["name"]); ?></span>
        <?php echo ("نظر:") ?>
        <span><?php echo ($row["message"]); ?></span>
        <a href="commentmng_delete.php?id=<?php echo ($row["id"]); ?>">حذف</a>
    </div>

<?php
}
?>
<?php
include("theme_footer.html");
?>