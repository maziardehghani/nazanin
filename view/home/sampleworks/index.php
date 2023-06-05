<?php
$sampleworks = $data['sampleworks'];
$paginateRows = $data['paginateRows'];
$service = $data['service'];
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

<!-- products -->
<section class="products">
    <div class="section-center clearfix">
        <article class="products-info">
            <div class="section-title">
                <h3>نمونه کار</h3>
                <h2>شینیون</h2>
            </div>

            <p class="product-text">

                <?= $service['description'] ?>
              </p>

            <a href="<?= URL ?>" class="btn btn-products"> <?= $option['website_name'] ?> </a
            >
        </article>

        <article class="products-cards clearfix">
            <?php foreach ($sampleworks as $samplework) { ?>
            <div class="product">
                <img
                        class="product-img"
                        src="<?= URL .'/files/'.$samplework['image']  ?>"
                        alt="samplework"
                />
                <h4 class="product-title"><?= $samplework['title'] ?></h4>
                <p> <?= $samplework['description'] ?></p>
            </div>

            <?php } ?>
        </article>
    </div>
</section>
<div class="container">
    <ul class="pagination">
        <?php for ($i=1 ; $i<=$paginateRows ; $i++){ ?>
        <li><a href="<?= URL . '/samplework/index/'.$service['id'].'?page='.$i ?>"><?= $i ?></a></li>
        <?php } ?>
    </ul>
</div>
<!-- end of products -->
