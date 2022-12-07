<?= $this->extend('_Template\MainLayout') ?>

<!-- For load css -->

<?= $this->section('loadCss') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page_wrapper">

    <!--slide banner section start-->
    <section class="hero_banner_section d-flex align-items-center mb-130" data-bgimg="<?= BASE_URL ?>assets/img/bg/hero-bg1.webp">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="hero_content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">DYNAMICS 23</h1>
                            <div class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                <p class="typedjs"></p>
                            </div>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s" href="all-game.html">Join Now</a>
                        </div>
                    </div>
                    <div class="wow fadeInUp col-6" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <img width="740" height="340" src="<?= BASE_URL ?>assets/img/bg/gaming-bg1.webp" alt="">
                        <div class="gaming_video_paly_icon">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="134" height="140" src="<?= BASE_URL ?>assets/img/others/play-btn.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!-- gaming  world section start -->
    <section class="gaming_world_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>EVENT STARTED IN</h2>
            </div>
            <div class="gaming_world_inner">
                <div id="getting-started"></div>
            </div>
        </div>
    </section>
    <!-- gaming  world section end -->


    <!-- counterup section start -->
    <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counterup_inner d-flex justify-content-center">
                        <div class="single_counterup one">
                            <div class="counterup_text">
                                <h2 class="counterup color1">8697</h2>
                                <span>TWITCH STREAMS</span>
                            </div>
                        </div>
<<<<<<< HEAD
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="#home">HOME</a></li>
                                    <li><a href="#about">ABOUT</a></li>
                                    <li><a href="/competition">COMPETITION</a></li>
                                    <li><a href="index-2.html">HOMESTAY</a></li>
                                    <li><a href="index-2.html">CONTACT</a></li>
                                </ul>
                            </nav>
=======
                        <div class="single_counterup two">
                            <div class="counterup_text">
                                <h2 class="counterup color2">428</h2>
                                <span>TOTAL GAMES</span>
                            </div>
                        </div>
                        <div class="single_counterup three">
                            <div class="counterup_text">
                                <h2 class="counterup color3">5367</h2>
                                <span>YOUTUBE STREAMS</span>
                            </div>
                        </div>
                        <div class="single_counterup four">
                            <div class="counterup_text">
                                <h2 class="counterup color4">249</h2>
                                <span>PRO TEAM</span>
                            </div>
>>>>>>> e37fe990278743130729824f0ef13e4ce884bbf2
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counterup section end -->

    <!-- popular gaming  section start -->
    <section class="popular_gaming_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Popular GAME</h2>
                <p>When unknown printer took type and scrambled it to make <br>
                    type specimen book centuries,</p>
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb1.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb2.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular_gaming_section mb-140" id="about">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>ABOUT DYNAMICS</h2>
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p align="left">
                            Dynamics 2023 merupakan ajang penguatan dan peningkatan jiwa
                            kepemimpinan pelajar di-Indonesia khususnya di wilayah Jabodatabek, yang
                            nantinya diharapkan dapat mengemban peran vital dilingkungan eksternal
                            maupun internal. Agenda tahunan ini dipersembahkan organisasi siswa/i SMP IT
                            Nurul Fikri Bogor dengan mengusung tema "Preserving Youth Legacy through
                            Social Movement and Competition". </p>
                        <p align="left">
                            Serangkaian agenda Dynamics 2023
                            disusun sebagai kontribusi kami untuk memberdayakan potensi pemuda untuk
                            menjadi seorang impact maker muda diantaranya, Nurul Fikri Leader League,
                            Youth Charity Concert, dan Next Leader Competitions.

                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img class="img-fluid animate__shakeY" src="<?= BASE_URL ?>assets/img/dynamics/mascot.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <h2>Our Target</h2>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="counterup_inner d-flex justify-content-center">
                        <div class="single_counterup one">
                            <div class="counterup_text">
                                <h2 class="counterup color2">50</h2>
                                <span>SEKOLAH</span>
                            </div>
                        </div>
                        <div class="single_counterup two">
                            <div class="counterup_text">
                                <h2 class="counterup color3">500</h2>
                                <span>SISWA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- popular gaming  section start -->
    <section class="popular_gaming_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Timeline</h2>
                <p>When unknown printer took type and scrambled it to make <br>
                    type specimen book centuries,</p>
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb1.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb2.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb3.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb">
                            <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/others/popular-game-thumb4.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular gaming section end -->

    <!-- testimonial section start -->

    <section class="testimonial_section wow fadeInUp" data-bgimg="<?= BASE_URL ?>assets/img/others/testimonial-bg-fullwidth.webp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-60">
                        <h2>What people’s say <br>
                            ABOUT <span>game studio.</span></h2>
                    </div>
                    <div class="testimonial_inner slick__activation slick_navigation" data-slick=' {>>>>>>> khoirul
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": true,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,
                        "responsive":[
                        {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                        ]
                        }' data-bgimg="<?= BASE_URL ?>assets/img/others/testimonial-bg.webp">
                        <<<<<<< HEAD <div class="testimonial_list d-flex align-items-center">
                            <div class="testimonial_thumb">
                                <img width="270" height="319" src="<?= BASE_URL ?>assets/img/others/testimonial-thumb.webp" alt="">
                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_desc">
                                    <p>It is a long established fact that a reader will be distracted the
                                        readable content of page when looking at it layout the point using
                                        lorem Ipsum is that it has a more-or-less normal distribution lette
                                        as opposed to using making it look like readable english,
                                        many desktop publishing packages and web page now editors.</p>
                                </div>
                                <div class="testimonial_author">
                                    <h3>Randolph Frazier</h3>
                                    <span>Top Rated Gamer</span>
                                </div>
                            </div>
                    </div>
                    <div class="testimonial_list d-flex align-items-center">
                        <div class="testimonial_thumb">
                            <img width="270" height="319" src="<?= BASE_URL ?>assets/img/others/testimonial-thumb.webp" alt="">
                        </div>
                        <div class="testimonial_content">
                            <div class="testimonial_desc">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus quos consectetur amet blanditiis, facilis esse illo unde saepe facere dolore porro asperiores ducimus, inventore voluptate doloribus odio fugit magnam voluptatum perferendis? Sit quisquam labore adipisci doloremque! Aperiam voluptate modi quasi are nobis.</p>
                            </div>
                            <div class="testimonial_author">
                                <h3>Roar Spring</h3>
                                <span>Top Rated Gamer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- testimonial section end -->

<<<<<<< HEAD
<<<<<<< HEAD
                <!-- Main JS -->
                <script src="<?= BASE_URL ?>assets/js/main.js"></script>
                <script type="text/javascript">
                    $("#getting-started")
                        .countdown("2023/01/15").on('update.countdown', function(event) {
                            var $this = $(this).html(event.strftime('<div class="counterup_inner d-flex justify-content-center">' +
                                ' <div class="single_counterup one">' +
                                '<div class="counterup_text">' +
                                ' <h2 class="counterup color1 hari">%D</h2>' +
                                '<span>DAY</span>' +
                                ' </div>' +
                                ' </div>' +
                                ' <div class="single_counterup two">' +
                                ' <div class="counterup_text">' +
                                '<h2 class="counterup color2 jam">%H</h2>' +
                                ' <span>HOUR</span>' +
                                '</div>' +
                                ' </div>' +
                                '<div class="single_counterup three">' +
                                ' <div class="counterup_text">' +
                                '<h2 class="counterup color3 menit">%M</h2>' +
                                ' <span>MINUTE</span>' +
                                '</div>' +
                                ' </div>' +
                                ' <div class="single_counterup four">' +
                                ' <div class="counterup_text">' +
                                '<h2 class="counterup color4 detik">%S</h2>' +
                                '<span>SECOND</span>' +
                                '</div>' +
                                '</div>' +
                                '</div>'));
                        });
                </script>
<<<<<<< HEAD
=======

>>>>>>> dfece892e8fe9b8c159affb9de77f1d4287f7a5c
=======
        <!--footer area start-->
        <footer class="footer_widgets">
            <div class="main_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main_footer_inner d-flex">
                                <div class="footer_widget_list">
                                    <div class="footer_logo">
                                        <a href="#"><img aria-label="logo" width="215" height="79" src="<?= BASE_URL ?>assets/img/dynamics/dynamicsresize.webp" alt=""></a>
                                    </div>
                                    <div class="footer_contact_desc">
                                        <p>It long estabhed fact that reader
                                            will ditracted the readable content
                                            looking using readable.</p>
                                    </div>
                                    <div class="footer_social">
                                        <ul class="d-flex">
                                            <li><a aria-label="facebook" class="facebook" href="https://www.facebook.com/"><i class="icofont-facebook"></i></a></li>
                                            <li><a aria-label="dribble" class="dribbble" href="https://dribbble.com/"><i class="icofont-dribbble"></i></a></li>
                                            <li><a aria-label="youtube" class="youtube" href="https://www.youtube.com/"><i class="icofont-youtube-play"></i></a></li>
                                            <li><a aria-label="twitter" class="twitter" href="https://twitter.com/"><i class="icofont-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer_widget_list contact">
                                    <h3>Contact</h3>
                                    <div class="footer_contact_info">
                                        <div class="footer_contact_info_list">
                                            <span>Location:</span>
                                            <p>136 Harding Ave
                                                Wheeling, West Virginia</p>
                                        </div>
                                        <div class="footer_contact_info_list">
                                            <span>Phone:</span>
                                            <p><a href="#">00 (62) 632 867 4497</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_widget_list">
                                    <h3>today’s winners</h3>
                                    <div class="footer_winners_gallery">
                                        <div class="footer_winners_list d-flex">
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners1.webp" alt=""></a>
                                            </div>
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners2.webp" alt=""></a>
                                            </div>
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners3.webp" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="footer_winners_list d-flex">
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners4.webp" alt=""></a>
                                            </div>
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners5.webp" alt=""></a>
                                            </div>
                                            <div class="footer_winners_thumb">
                                                <a href="game-details.html"><img aria-label="game-team" width="75" height="75" src="<?= BASE_URL ?>assets/img/others/winners6.webp" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_widget_list footer_list_menu">
                                    <h3>Content</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="about.html"> Copywriting</a></li>
                                            <li><a href="about.html">Social Media</a></li>
                                            <li><a href="about.html">Interactive Media</a></li>
                                            <li><a href="about.html">Motion Design</a></li>
                                            <li><a href="about.html">Illustration</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
=======
<!-- blog section start -->
<section class="blog_section mb-90">
    <div class="container">
        <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <h2>Latest Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna</p>
        </div>
        <div class="row blog_inner">
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog1.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
>>>>>>> e37fe990278743130729824f0ef13e4ce884bbf2
                        </div>
                        <h3><a href="blog-details.html">if you have seen Apple's
                                recent jabs.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog2.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html">Lorem ipsum dolor sit amet, adipisicing elit.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog3.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html"> Perferendis hic sint are rem, incidunt vitae.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog4.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html">if you have seen Apple's
                                recent jabs.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->

<!-- gaming update section start -->
<section class="gaming_update_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="<?= BASE_URL ?>assets/img/bg/gaming-update.webp">
                    <div class="gaming_update_text">
                        <h2>JOIN US FOR MONEY</h2>
                    </div>
                    <div class="gaming_update_btn">
                        <a class="btn btn-link" href="contact.html">CONNECT NOW <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="testimonial_list d-flex align-items-center">
    <div class="testimonial_thumb">
        <img width="270" height="319" src="<?= BASE_URL ?>assets/img/others/testimonial-thumb.webp" alt="">
    </div>
    <div class="testimonial_content">
        <div class="testimonial_desc">
            <p>It is a long established fact that a reader will be distracted the
                readable content of page when looking at it layout the point using
                lorem Ipsum is that it has a more-or-less normal distribution lette
                as opposed to using making it look like readable english,
                many desktop publishing packages and web page now editors.</p>
        </div>
        <div class="testimonial_author">
            <h3>Randolph Frazier</h3>
            <span>Top Rated Gamer</span>
        </div>
    </div>
</div>
<div class="testimonial_list d-flex align-items-center">
    <div class="testimonial_thumb">
        <img width="270" height="319" src="<?= BASE_URL ?>assets/img/others/testimonial-thumb.webp" alt="">
    </div>
    <div class="testimonial_content">
        <div class="testimonial_desc">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus quos consectetur amet blanditiis, facilis esse illo unde saepe facere dolore porro asperiores ducimus, inventore voluptate doloribus odio fugit magnam voluptatum perferendis? Sit quisquam labore adipisci doloremque! Aperiam voluptate modi quasi are nobis.</p>
        </div>
        <div class="testimonial_author">
            <h3>Roar Spring</h3>
            <span>Top Rated Gamer</span>
        </div>
    </div>

</div>
</section>
<!-- testimonial section end -->

<!-- blog section start -->
<section class="blog_section mb-90">
    <div class="container">
        <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <h2>Latest Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna</p>
        </div>
        <div class="row blog_inner">
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog1.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html">if you have seen Apple's
                                recent jabs.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog2.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html">Lorem ipsum dolor sit amet, adipisicing elit.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog3.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html"> Perferendis hic sint are rem, incidunt vitae.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="blog-details.html"><img width="200" height="200" src="<?= BASE_URL ?>assets/img/blog/blog4.webp" alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_date">
                            <span><i class="icofont-calendar"></i> 20 January 2021</span>
                        </div>
                        <h3><a href="blog-details.html">if you have seen Apple's
                                recent jabs.</a></h3>
                        <a href="blog-details.html">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->

<!-- gaming update section start -->
<section class="gaming_update_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="<?= BASE_URL ?>assets/img/bg/gaming-update.webp">
                    <div class="gaming_update_text">
                        <h2>Connect with us <br>
                            for gamING update.</h2>
                    </div>
                    <div class="gaming_update_btn">
                        <a class="btn btn-link" href="contact.html">CONNECT NOW <img width="20" height="20" src="<?= BASE_URL ?>assets/img/icon/arrrow-icon.webp" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gaming update section end -->

</div>
<?= $this->endSection() ?>

<?= $this->section('loadJs') ?>
<script src="<?= BASE_URL ?>assets/js/jquery.countdown.min.js"></script>
<script type="text/javascript">
    $("#getting-started")
        .countdown("2023/01/15").on('update.countdown', function(event) {
            var $this = $(this).html(event.strftime('<div class="counterup_inner d-flex justify-content-center">' +
                ' <div class="single_counterup one">' +
                '<div class="counterup_text">' +
                ' <h2 class="counterup color1 hari">%D</h2>' +
                '<span>DAY</span>' +
                ' </div>' +
                ' </div>' +
                ' <div class="single_counterup two">' +
                ' <div class="counterup_text">' +
                '<h2 class="counterup color2 jam">%H</h2>' +
                ' <span>HOUR</span>' +
                '</div>' +
                ' </div>' +
                '<div class="single_counterup three">' +
                ' <div class="counterup_text">' +
                '<h2 class="counterup color3 menit">%M</h2>' +
                ' <span>MINUTE</span>' +
                '</div>' +
                ' </div>' +
                ' <div class="single_counterup four">' +
                ' <div class="counterup_text">' +
                '<h2 class="counterup color4 detik">%S</h2>' +
                '<span>SECOND</span>' +
                '</div>' +
                '</div>' +
                '</div>'));
        });
<<<<<<< HEAD
    </script>

    <!-- Main JS -->
    <script src="<?= BASE_URL ?>assets/js/main.js"></script>
    <script type="text/javascript">
        $("#getting-started")
            .countdown("2023/01/15").on('update.countdown', function(event) {
                var $this = $(this).html(event.strftime('<div class="counterup_inner d-flex justify-content-center">' +
                    ' <div class="single_counterup one">' +
                    '<div class="counterup_text">' +
                    ' <h2 class="counterup color1 hari">%D</h2>' +
                    '<span>DAY</span>' +
                    ' </div>' +
                    ' </div>' +
                    ' <div class="single_counterup two">' +
                    ' <div class="counterup_text">' +
                    '<h2 class="counterup color2 jam">%H</h2>' +
                    ' <span>HOUR</span>' +
                    '</div>' +
                    ' </div>' +
                    '<div class="single_counterup three">' +
                    ' <div class="counterup_text">' +
                    '<h2 class="counterup color3 menit">%M</h2>' +
                    ' <span>MINUTE</span>' +
                    '</div>' +
                    ' </div>' +
                    ' <div class="single_counterup four">' +
                    ' <div class="counterup_text">' +
                    '<h2 class="counterup color4 detik">%S</h2>' +
                    '<span>SECOND</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>'));
            });
    </script>
>>>>>>> 63582017e4c844f1afce0f92eab4feec4504116f

</body>

</html>
=======
</script>
<?= $this->endSection() ?>
>>>>>>> khoirul
>>>>>>> e37fe990278743130729824f0ef13e4ce884bbf2
