<?php
include("theme_header.php");
include("db.php");

if(!isset($_SESSION['fullname'])){
    echo "<div class='warning-box'>
          <p>کاربر گرامی، برای ثبت درخواست جدید، لطفاً ابتدا وارد حساب کاربری خود شوید.</p>
          <a href='login.php' class='btn-link'>ورود به حساب</a>
          </div>";
    include("theme_footer.html");
    return;
}
?>

<div class="request-section">
    <h2>ثبت درخواست جدید</h2>
    <form method="post" action="request_add_action.php" enctype="multipart/form-data">
        <label>نام</label>
        <input type="text" value="<?php echo $_SESSION['fullname']; ?>" readonly>

        <label>ایمیل</label>
        <input type="text" value="<?php echo $_SESSION['email']; ?>" readonly>

        <label>عنوان</label>
        <input type="text" name="title" required>

        <label>توضیح</label>
        <textarea name="description" required></textarea>

        <label>ارسال عکس (اختیاری)</label>
        <input type="file" name="file" accept="image/*">

        <button type="submit">ثبت درخواست</button>
    </form>
</div>

<?php include("theme_footer.html"); ?>