<?php
include("db.php");
include("theme_header.php");

$id = $_GET['id'];

if(isset($_POST['submit_answer'])) {
    $new_answer = $_POST['answer'];
    mysqli_query($connect, "UPDATE `requeststbl` SET answer='$new_answer' WHERE id='$id'");

    echo "<script>alert('پاسخ با موفقیت ثبت شد'); window.location='request_manage.php';</script>";
}

$query = mysqli_query($connect, "SELECT * FROM `requeststbl` WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>

<div style="padding: 20px;">
    <h2>مدیریت پاسخ</h2>
    <form method="post">
        <textarea name="answer" required style="width:100%; height:150px;"><?php echo isset($row['answer']) ? $row['answer'] : ''; ?></textarea>
        <br><br>
        <button type="submit" name="submit_answer" style="padding: 10px 20px;">ثبت / ویرایش پاسخ</button>
    </form>
    <br>
    <a href="request_manage.php">بازگشت به لیست درخواست‌ها</a>
</div>

<?php include("theme_footer.html"); ?>