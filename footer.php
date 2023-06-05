<?php
$option = model::get_option();
?>
<!-- footer -->
<footer class="footer">
    <div class="section-center">
        <div class="social-icons">
            <a class="social-icon" href="<?= $option['whatsapp'] ?>">
                <i class="bi bi-whatsapp"></i>
            </a>

            <a class="social-icon" href="<?= $option['telegram'] ?>">
                <i class="bi bi-telegram"></i>
            </a>

            <a class="social-icon" href="<?= $option['instagram'] ?>">
                <i class="bi bi-instagram"></i>
            </a>
        </div>

        <h4 class="footer-text">
            <span class="company"><?= $option['website_name'] ?></span>
            کلیه‌ی حقوق نزد نازنین محفوظ است و هر گونه کپی‌برداری از
            مطالب، پیگرد قانونی دارد.
        </h4>
    </div>
</footer>
<!-- end of footer -->

<script src="<?= $option['URL'] .'/public/home/js/app.js'?>"></script>
</body>
</html>