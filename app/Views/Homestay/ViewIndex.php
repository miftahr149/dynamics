<?= $this->extend('MainLayout') ?>

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
                    <p>Homestay dikhususkan untuk sekolah yang berlokasi jauh dari NFBS Bogor</p>
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
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact_info_list left wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s" data-wow-duration="1.1s" style="background-image: url(&quot;assets/img/others/gaming-world-bg1.webp&quot;); visibility: visible; animation-duration: 1.1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="contact_info_thumb">
                                <img src="assets/img/thalib.webp" alt="">
                            </div>
                            <div class="contact_info_text  text-center">
                                <h3>Thalib</h3>
                                <a class="btn btn-link" onclick="btnBooking()" href="javascript:void(0)">Book Now</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact_info_list right wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s" data-wow-duration="1.3s" style="background-image: url(&quot;assets/img/others/gaming-world-bg3.webp&quot;); visibility: visible; animation-duration: 1.3s; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="contact_info_thumb">
                                <img  src="assets/img/thalibah.webp" alt="">
                            </div>
                            <div class="contact_info_text text-center">
                                <h3>Thalibah</h3>
                                <a class="btn btn-link" onclick="btnBooking()" href="javascript:void(0)">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>
    <!-- CSS Load -->
    <?= $this->section('loadJs') ?>
    <script>
        function btnBooking() {
            Swal.fire(
                'Dynamics 2023',
                'Sorry, this menu is not yet available',
                'warning'
            )
        }
    </script>
    <?= $this->endSection() ?>