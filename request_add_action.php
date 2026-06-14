<?php
session_start();
include("db.php");

$fullname = $_SESSION['fullname'];
$email= $_SESSION['email'];
$title= $_POST['title'];
$description = $_POST['description'];

$filename="";

if($_FILES['file']['name']!=""){
    $filename=time().$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$filename);
}

$query="INSERT INTO `requeststbl`(`fullname`,`email`, `title`, `description`, `file`) VALUES ('$fullname','$email','$title','$description','$filename')";

$result=mysqli_query($connect,$query);

if($result){
?>
<script>
location.replace("request_list.php");
</script>
<?php
}else{
echo "ثبت نشد";
}
?>