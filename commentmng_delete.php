<?php
session_start();
include("db.php");
if (!isset($_SESSION['is_admin'])) {
    echo "دسترسی ندارید";
    exit;
}

$id = $_GET["id"];

$result = mysqli_query($connect, "DELETE FROM `commentstbl` WHERE id=$id");

mysqli_close($connect);

if ($result) {
?>
    <script>
        location.replace("commentmng.php");
    </script>

<?php
} else {
    echo ("حذف نشد");
}
?>

<?php
include("theme_footer.html");
?>