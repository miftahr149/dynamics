<?= $this->extend('_Template\MainLayout') ?>

<!-- CSS Load -->
<?= $this->section('loadCss') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp" style="background-image: url(&quot;assets/img/bg/breadcrumbs-bg.webp&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text text-center">
                    <h1>Homestay</h1>
                    <ul class="d-flex justify-content-center">
                        <li><a href="index.html">Home </a></li>
                        <li> <span>//</span></li>
                        <li> PAGES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page_wrapper">

    <!-- contact section start -->
    <section class="contact_page_section mb-140">
        <div class="container">
            <div class="contact_info_area">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list left wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s" data-wow-duration="1.1s" style="background-image: url(&quot;assets/img/others/gaming-world-bg1.webp&quot;); visibility: visible; animation-duration: 1.1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="contact_info_thumb">
                                <img width="115" height="115" src="assets/img/icon/email.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Thalib</h3>
                                <a class="btn btn-link" href="match.html">Book Now</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list center wow fadeInUp" data-bgimg="" data-wow-delay="0.2s" data-wow-duration="1.2s" style="background-image: url; visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list right wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s" data-wow-duration="1.3s" style="background-image: url(&quot;assets/img/others/gaming-world-bg3.webp&quot;); visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="contact_info_thumb">
                                <img width="115" height="115" src="assets/img/icon/phone.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Thalibah</h3>
                                <a class="btn btn-link" href="match.html">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>
    <!-- CSS Load -->
    <?= $this->section('loadJs') ?>
    <?= $this->endSection() ?>