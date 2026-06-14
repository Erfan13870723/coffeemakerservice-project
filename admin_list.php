<?php
include("db.php");
include("theme_header.php");

if(!isset($_SESSION['is_admin'])) {
    echo "<div style='padding:40px;'>شما دسترسی ندارید.</div>";
    include("theme_footer.txt");
    exit;
}

$current_user_id = $_SESSION['user_id'];
$query = mysqli_query($connect, "SELECT * FROM `userstbl`");
?>

<main style="padding: 20px; direction: rtl; text-align: right;"> 
    
    <h2 style="text-align: center;">مدیریت ادمین‌ها</h2>
    
    <table class="admin-table">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <?php if($row['id'] != $current_user_id) { ?>
                        <a href="adminpnl_delete.php?id=<?php echo $row['id']; ?>" 
                           class="btn-delete" 
                           onclick="return confirm('آیا مطمئن هستید؟');">حذف</a>
                    <?php } else { ?>
                        <span style="color: #999;">حساب فعلی</span>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<?php include("theme_footer.html"); ?>