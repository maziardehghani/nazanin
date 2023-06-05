<?php
$services = $data['services'];
$option = model::get_option();
?>
<!-- header -->
<header class="header">
    <div class="banner">
        <h1><?= $option['website_name'] ?></h1>
        <h2>
            زندگی وقتی زیبا تر می شود که، آرایشگر مناسبتان را پیدا کنید
        </h2>
        <a class="btn btn-banner" href="#"> </a>
    </div>
</header>
<div class="content-divider"></div>
<!-- end of header -->

<!-- features -->
<section class="features clearfix">
    <article class="feature">
                <span class="feature-icon">
                    <i class="bi bi-x-diamond-fill"></i>
                </span>
        <h4 class="feature-title">زیبایی</h4>
        <p class="feature-text">
            زیبایی دیگر یک رویا نیست , با ما حس زیبایی را تجربه کنید
        </p>
    </article>

    <article class="feature">
                <span class="feature-icon">
                    <i class="bi bi-symmetry-vertical"></i>
                </span>
        <h4 class="feature-title"> کاشت ناخن </h4>
        <p class="feature-text">
      کاشت ناخن , ترمیم ناخن های شکسته , کیفیت بالا و با دوام
        </p>
    </article>

    <article class="feature">
                <span class="feature-icon">
                    <i class="bi bi-subtract"></i>
                </span>
        <h4 class="feature-title">میکاپ عروس </h4>
        <p class="feature-text">
            با بهترین  و با کیفیت ترین لوازم آرایشی  , آرایش عروس , زیباترین عروس باش
        </p>
    </article>

    <article class="feature">
                <span class="feature-icon">
                    <i class="bi bi-server"></i>
                </span>
        <h4 class="feature-title"> پاکسازی صورت </h4>
        <p class="feature-text">
           عمل پاکسازی صورت , جوان سازی پوست  , رفع چین چروک , روشن سازی پوست , رفع گودی زیر چشم
         </p>
    </article>
</section>
<!-- end of features -->

<!-- about -->
<section class="section-center clearfix">
    <!-- about-imag -->
    <article class="about-img">
        <div class="about-picture-container">
            <img
                    class="about-picture"
                    src="<?= URL . '/public/home/images/about-bcg.jpg' ?>"
                    alt="about-image"
            />
        </div>
    </article>

    <!-- about-info -->
    <article class="about-info">
        <!-- section title -->
        <div class="section-title">
            <h3>درباره من</h3>
            <h2>مرضیه صمیمی</h2>
        </div>

        <p class="about-text">
            <span> </span>
        </p>
        <p class="about-text">
            <span>upl</span>
            <span>مدرس رسمی کمپانی </span>
        </p>
        <p class="about-text">
            دارای مدرک از نارت روسیه دارای مدرک فنی حرفه ای و ارایه آن به هنرجو
        </p>


    </article>
</section>
<!-- end of about -->

<!-- services -->
<section class="section-center">
    <div class="section-title services-title">
        <h3>نمونه کار</h3>
        <h2> معرفی خدمات </h2>
    </div>

    <div class="clearfix">
        <?php foreach ($services as $service) { ?>
            <article class="service-card">
                <div class="service-img-container">
                    <img
                            class="service-img"
                            src="<?= URL . '/files/'.$service['image'] ?>"
                            alt="single service"
                    />
                    <span class="service-icon">
                            <i class="bi bi-app-indicator"></i>
                        </span>
                </div>

                <div class="service-info">
                    <h4><?= $service['title'] ?></h4>
                    <p>
                        سالن آرایشی نازنین تقدیم میکند
                    </p>
                    <a class="btn btn-sevice" href="<?= URL . '/samplework/index/'.$service['id'] ?>"
                    >مشاهده نمونه کار</a
                    >
                </div>
            </article>
        <?php } ?>
    </div>
</section>
<!-- end of services -->
<!-- contact us -->
<section class="contact">
    <div class="section-center clearfix">
        <article class="contact-info">
            <div class="contact-item">
                <h4 class="contact-title">
                            <span class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </span>
                    آدرس
                </h4>

                <h4 class="contact-text">
                    <?= $option['website_name'] ?>
                    <br/>
                    <?= $option['address'] ?>
                </h4>
            </div>

            <div class="contact-item">
                <h4 class="contact-title">
                            <span class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                    ایمیل
                </h4>

                <h4 class="contact-text"><?= $option['email'] ?></h4>
            </div>

            <div class="contact-item">
                <h4 class="contact-title">
                            <span class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                    شماره تماس
                </h4>

                <h4 class="contact-text"><?= $option['phone'] ?></h4>
            </div>
        </article>
        <article class="contact-form">
            <h3>تماس با ما</h3>

            <form>
                <div class="form-group">
                    <input
                            class="form-control"
                            type="text"
                            placeholder="نام"
                            name="name"
                    />
                    <input
                            class="form-control"
                            type="email"
                            placeholder="ایمیل"
                            name="email"
                    />
                    <textarea
                            name="message"
                            placeholder="متن پیام"
                            class="form-control"
                            rows="5"
                    ></textarea>
                </div>

                <button type="submit" class="btn submit-btn">
                    ارسال پیام
                </button>
            </form>
        </article>

    </div>
</section>
<!-- end of contact us -->
