<?php
include("theme_header.php");
include("db.php");

if(!isset($_SESSION['is_admin'])){
?>
<script>
location.replace("index.php");
</script>
<?php
}
?>

<h2 style="text-align:center;">مدیریت درخواست ها</h2>

<?php
$result=mysqli_query($connect,"SELECT * FROM `requeststbl` ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result)){
?>

<div class="simple-box">

نام: <?php echo $row['fullname']; ?><br>
ایمیل: <?php echo $row['email']; ?><br>
عنوان: <?php echo $row['title']; ?><br>
توضیح: <?php echo substr($row['description'],0,60); ?> ...

<br><br>

<?php if($row['file']!=""){ ?>
<a href="uploads/<?php echo $row['file']; ?>" target="_blank">
مشاهده فایل
</a>
<br>
<?php } ?>

<a href="request_answer.php?id=<?php echo $row['id']; ?>">پاسخ</a>
|
<a href="request_delete.php?id=<?php echo $row['id']; ?>">حذف</a>

</div>

<?php } ?>

<?php include("theme_footer.html"); ?>

