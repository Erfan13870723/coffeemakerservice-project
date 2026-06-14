<?php
session_start();
include("db.php");
if (!isset($_SESSION['is_admin'])) {
    echo "دسترسی ندارید";
    exit;
}

$id = $_GET["id"];

$result = mysqli_query($connect, "SELECT `is_admin` FROM `userstbl` WHERE id=$id");
$row=mysqli_fetch_array($result);

if ($row['is_admin']==1) {
    echo"ادمین اصلی قابل حذف نیست";
    exit();
} else {
    mysqli_query($connect,"DELETE FROM `userstbl` WHERE id=$id");
?>
    <script>
        location.replace("adminpanel.php");
    </script>

<?php
}
?>

<?php
include("theme_footer.html");
?>