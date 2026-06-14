<?php
session_start();
include("db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$result = mysqli_query($connect, "SELECT * FROM `userstbl` WHERE email='$email' AND password='$password'");

$row = mysqli_fetch_array($result);

if ($row) {
    $_SESSION['user_id'] = $row['id'];
    $_SESSION["fullname"] = $row["fullname"];
    $_SESSION["email"] = $row["email"];

    if ($row["is_admin"] == 1) {
        $_SESSION["is_admin"] = 1;
    } else {
        $_SESSION["is_admin"] = 0;
    }
?>
    <script>
        location.replace("index.php");
    </script>
<?php
} else {
?>
    <script>
        alert("ایمیل یا رمز عبور اشتباه است");
        location.replace("login.php");
    </script>
<?php
}
?>