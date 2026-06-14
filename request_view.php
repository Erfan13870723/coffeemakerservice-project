<?php
include("theme_header.php");
include("db.php");

if(!isset($_SESSION['fullname'])){
?>
<script>
location.replace("login.php");
</script>
<?php
}

$id = $_GET['id'];

$result=mysqli_query($connect,"SELECT * FROM `requeststbl` WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2 style="text-align:center;">جزئیات درخواست</h2>

<div class="simple-box">

<strong>نام:</strong> <?php echo $row['fullname']; ?><br>
<strong>ایمیل:</strong> <?php echo $row['email']; ?><br><br>

<strong>عنوان:</strong> <?php echo $row['title']; ?><br><br>

<strong>توضیح:</strong><br>
<?php echo $row['description']; ?><br><br>

<?php if($row['file']!=""){ ?>
<a href="uploads/<?php echo $row['file']; ?>" target="_blank">
مشاهده فایل ارسال شده
</a>
<br><br>
<?php } ?>

<?php if($row['answer']!=""){ ?>
<div style="background:#e6f4ea;padding:10px;border-radius:8px;">
<strong>پاسخ ادمین:</strong><br>
<?php echo $row['answer']; ?>
</div>
<?php } else { ?>
<span style="color:red;">هنوز پاسخی ثبت نشده</span>
<?php } ?>

</div>
<?php include("theme_footer.html"); ?>