<?= $this->extend('MainLayout') ?>

<!-- CSS Load -->
<?= $this->section('loadCss') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text text-center">
                    <h1>Contact us</h1>
                    <ul class="d-flex justify-content-center">
                        <li><a href="index-2.html">Home </a></li>
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
                        <div class="contact_info_list left wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-delay: 0.1s; animation-name: fadeInUp; background-image: url(&quot;assets/img/others/gaming-world-bg1.webp&quot;);">
                            <div class="contact_info_thumb">
                                <img width="115" height="115" src="assets/img/icon/email.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Email:</h3>
                                <p>
                                    <a href="mailto:dynamics@smpit-nfbogor.sch.id">dynamics@smpit-nfbogor.sch.id</a> <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list center wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg2.webp" data-wow-delay="0.2s" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeInUp; background-image: url(&quot;assets/img/others/gaming-world-bg2.webp&quot;);">
                            <div class="contact_info_thumb">
                                <img width="115" height="115" src="assets/img/icon/location.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Location:</h3>
                                <p>Jl. Jami, Sukaluyu, Kec. Tamansari, Kabupaten Bogor, Jawa Barat 16610</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list right wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInUp; background-image: url(&quot;assets/img/others/gaming-world-bg3.webp&quot;);">
                            <div class="contact_info_thumb">
                                <img width="115" height="115" src="assets/img/icon/phone.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Phone:</h3>
                                <p>
                                    <a href="javascript:void(0)"> 0838-9321-9801 (MS.SYIFA)</a>
                                    <a href="tel:+88(00)4568457437"> 0812-9688-1438 (MS EZI)</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- contact section end -->

    <!--contact map start-->
    <div class="contact_map mt-70 pb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.02369509503!2d106.7394109!3d-6.6461846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4735acf516e63e79!2sNFBS%20Bogor!5e0!3m2!1sid!2sid!4v1671078095515!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('loadJs') ?>
<?= $this->endSection() ?>