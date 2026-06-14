<?php
include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `userstbl`(`fullname`, `email`, `password`, `is_admin`) VALUES ('$fullname','$email','$password',0)";

$result = mysqli_query($connect, $query);

if ($result) {
?>
    <script>
        location.replace("login.php");
    </script>
<?php
} else {
    echo "ثبت نام انجام نشد";
}
?>