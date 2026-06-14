<?php
$alreadyLoggedIn = isset($_SESSION['fullname']);
?>
<?php include("theme_header.php"); ?>

    <section class="login-section">
        <?php if ($alreadyLoggedIn): ?>
            <div class="login-alert">
                شما قبلاً وارد سایت شده‌اید ☕
                <br>
                <a href="logout.php">خروج</a>
            </div>
        <?php endif; ?>

        <?php
        if (isset($_SESSION['msg'])) {
            echo "<p class='msg'>" . $_SESSION['msg'] . "</p>";
            unset($_SESSION['msg']);
        }

        if (isset($_GET['registered'])) {
            echo "<p class='msg success'>ثبت نام با موفقیت انجام شد، وارد شوید</p>";
        }
        ?>


        <div class="login-box">
            <h2>ورود به حساب کاربری</h2>
            <form method="post" action="login_check.php" autocomplete="off">
                <label>:ایمیل</label>
                <input type="text" name="email" placeholder="example@gmail.com" autocomplete="off" required>
                <label>:رمز عبور</label>
                <input type="text" name="password" placeholder="••••••••" autocomplete="new-password" required>

                <button type="submit" name="login">ورود</button>
                <p class="register-text">هنوز ثبت نام نکردی؟ <a href="#" id="show-register">ثبت نام</a></p>
            </form>
            <?php if (isset($error)) echo "<p>$error</p>"; ?>
        </div>

        <div class="register-box hidden">
            <h2>ثبت نام کاربر جدید</h2>
            <form method="post" action="register_action.php" autocomplete="off">
                <label>:نام و نام خانوادگی</label>
                <input type="text" name="fullname" placeholder="مثلا عرفان محمدی">

                <label>:ایمیل</label>
                <input type="email" name="email" placeholder="example@gmail.com" autocomplete="off" required>

                <label>:رمز عبور</label>
                <input type="password" name="password" placeholder="رمز عبور" autocomplete="off" required>

                <button type="submit" name="register">ثبت نام</button>
                <p class="register-text">حساب داری؟ <a href="#" id="show-login">ورود</a></p>

            </form>
        </div>
    </section>
    
<script>
        
const loginBox = document.querySelector('.login-box');
        const registerBox = document.querySelector('.register-box');

        document.getElementById('show-register').addEventListener('click', e => {
            e.preventDefault();
            loginBox.classList.add('hidden');
            registerBox.classList.remove('hidden');
        });

        document.getElementById('show-login').addEventListener('click', e => {
            e.preventDefault();
            registerBox.classList.add('hidden');
            loginBox.classList.remove('hidden');
        });
    </script>
    <?php include("theme_footer.html"); ?>
    