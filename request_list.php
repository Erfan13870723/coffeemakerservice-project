<?php
include("theme_header.php");
include("db.php");

$email=$_SESSION['email'];
$result=mysqli_query($connect,"SELECT * FROM `requeststbl` WHERE email='$email' ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result)){
?>

<a href="request_view.php?id=<?php echo $row['id']; ?>" class="request-card">

<strong><?php echo $row['fullname']; ?></strong><br>
<small><?php echo $row['email']; ?></small><br><br>
عنوان: <?php echo $row['title']; ?><br>
<?php echo substr($row['description'],0,60); ?>...

</a>

<?php } ?>

<?php include("theme_footer.html"); ?>