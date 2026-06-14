<?php
include("db.php");
include("theme_header.php");
?>

    <?php if (isset($_SESSION['fullname'])): ?>
        <div class="welcome-box">
            <?= $_SESSION['fullname'] ?> عزیز، خوش آمدید ☕
        </div>
    <?php endif; ?>

    <section class="hero">
        <div class="hero-content">
            <h2>تعمیر تخصصی انواع دستگاه قهوه ساز</h2>
            <p>نمایندگی تعمیرات قهوه ساز در یاسوج و نجف آباد
                با بیش از 10 سال سابقه درخشان
                .در حوزه تعمیر دستگاه های خانگی و صنعتی
                .☕ما آماده ایم تا دستگاه شما را با قطعات اصلی و ضمانت کیفیت به روز اول برگردانیم
            </p>
        </div>
    </section>

    <section class="services">
        <h2>خدمات ما</h2>
        <div class="cards">
            <div class="card">
                <h3>تعمیر بخار و نشت آب</h3>
                <p>رفع کامل مشکلات نشت آب،بخار،رسوب و گرفتگی سیستم قهوه ساز های خانگی و صنعتی</p>
            </div>
            <div class="card">
                <h3>تعویض قطعات اورجینال</h3>
                <p>استفاده از قطعات اصلی برند های معتبر مانند
                    <strong>دلونگی ، نوا ، بوش ، جمیلای</strong>
                    و سایر مدل های اروپایی و آسیایی
                </p>
            </div>
            <div class="card">
                <h3>سرویس کامل دستگاه</h3>
                <p>شامل جرم گیری،روغن کاری،تست فشار بخار و تنظیم عملکرد دستگاه با ابزار های دقیق</p>
            </div>
        </div>
    </section>

    <section class="benefits">
        <h2>چرا ما را انتخاب کنید؟</h2>
        <ul>
            <li>تعمیرکاران آموزش دیده و متخصص برندهای معتبر</li>
            <li>ارائه خدمات در محل مشتری و یا محل کار در کمترین زمان</li>
            <li>ضمانت 6 ماهه تمامی خدمات تعمیر</li>
            <li>مشاوره رایگان جهت نگهداری بهتر دستگاه </li>
        </ul>
    </section>

    <section class="cities">
        <h2>نمایندگی های ما</h2>
        <div class="city-links">
            <a href="yasouj.php" class="city-box">نمایندگی یاسوج</a>
            <a href="najafabad.php" class="city-box">نمایندگی نجف آباد</a>
        </div>
    </section>

    <footer>
        <div class="footer-feedback">
            <h3>پیشنهادات و انتقادات</h3>

            <?php if(isset($_SESSION['fullname'])): ?>

            <form method="post" action="send_feedback.php" class="feedback-form">
                <input type="text" name="name" placeholder="نام شما" required>
                <textarea name="message" rows="4" placeholder="نظر شما" required></textarea>

                <button type="submit" name="send_comment">ارسال نظر</button>
            </form>
            <?php else: ?>
                <p class="login-warning" style="text-align: center;">
                    برای ثبت نظر ابتدا باید 
                    <a href="login.php">وارد حساب کاربری خود شوید</a>
                </p>
                <?php endif; ?>
        </div>
    </footer>

    <?php include("theme_footer.html"); ?>

    <?php if (isset($_GET['comment']) && $_GET['comment'] == "success"): ?>
        <div class="success-msg">
            نظر شما با موفقیت ثبت شد ☕
        </div>
    <?php endif; ?>

</body>

</html>