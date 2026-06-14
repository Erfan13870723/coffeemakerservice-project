<?php
include("db.php");
session_start();

if(!isset($_SESSION['is_admin'])){
?>
<script>
location.replace("index.php");
</script>
<?php
}

$id=$_GET['id'];

mysqli_query($connect,"DELETE FROM `requeststbl` WHERE id=$id");
?>
<script>
location.replace("request_manage.php");
</script>