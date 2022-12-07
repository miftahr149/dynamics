<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= SITE_NAME ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/img/favicon.png" type="image/png">

    <!-- CSS 
    ========================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Metal+Mania&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/icofont.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/magnific-popup.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body class="body__bg" data-bgimg="<?= BASE_URL ?>assets/img/bg/body-bg.webp">

    <!--header area start-->
    <header class="header_section header_transparent sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="index-2.html"><img aria-label="logo" width="215" height="79" src="<?= BASE_URL ?>assets/img/dynamics/logo_400x100.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="index-2.html">HOME</a></li>
                                    <li><a href="index-2.html">ABOUT</a></li>
                                    <li><a href="index-2.html">COMPETITION</a></li>
                                    <li><a href="index-2.html">HOMESTAY</a></li>
                                    <li><a href="index-2.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

    <!--offcanvas menu area start-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!-- page wrapper start -->
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
                    <h2>Event Started In:</h2>
                </div>
                <div class="gaming_world_inner">

                    <!-- COUNTDOWN -->
                    <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="container">
                            <div class="col-12">
                                <div class="counterup_inner d-flex justify-content-center">
                                    <div class="single_counterup one">
                                        <div class="counterup_text">
                                            <h2 class="counterup color1 hari" id="hari">0</h2>
                                            <span>DAY</span>
                                        </div>
                                    </div>
                                    <div class="single_counterup two">
                                        <div class="counterup_text">
                                            <h2 class="counterup color2 jam" id="jam">0</h2>
                                            <span>HOUR</span>
                                        </div>
                                    </div>
                                    <div class="single_counterup three">
                                        <div class="counterup_text">
                                            <h2 class="counterup color3 menit" id="menit">0</h2>
                                            <span>MINUTE</span>
                                        </div>
                                    </div>
                                    <div class="single_counterup four">
                                        <div class="counterup_text">
                                            <h2 class="counterup color4 detik" id="detik">0</h2>
                                            <span>SECOND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- COUNTDOWN -->
                <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <h2>About Us</h2>

                    <!-- gaming video section end -->

                    <!-- upcoming gaming section start -->
                    <section class="upcoming_gaming_section mb-125">
                        <div class="container">
                            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                <h2>Upcoming Match</h2>
                                <p>When unknown printer took type and scrambled it to make <br>
                                    type specimen book centuries,</p>
                            </div>
                            <div class="upcoming_gaming_inner">
                                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                    <div class="upcoming_gaming_text">
                                        <p>20 August 2021 - 09:00 PM</p>
                                        <h3><a href="match-details.html">Roar Spring Game 2021</a></h3>
                                        <span>08 Teams Registered</span>
                                    </div>
                                    <div class="upcoming_play_video text-center">
                                        <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53" height="44" src="<?= BASE_URL ?>assets/img/others/play-btn2.webp" alt=""></a> <br>
                                        <span>Live Stream</span>
                                    </div>
                                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                                        <div class="single_upcoming_thumb">
                                            <img width="97" height="119" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb1.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="87" height="87" src="<?= BASE_URL ?>assets/img/others/game-vs1.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="93" height="120" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb2.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                    <div class="upcoming_gaming_text">
                                        <p>20 August 2021 - 09:00 PM</p>
                                        <h3><a href="match-details.html">Skrit tournament 2021</a></h3>
                                        <span>08 Teams Registered</span>
                                    </div>
                                    <div class="upcoming_play_video text-center">
                                        <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53" height="44" src="<?= BASE_URL ?>assets/img/others/play-btn2.webp" alt=""></a> <br>
                                        <span>Youtube Stream</span>
                                    </div>
                                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                                        <div class="single_upcoming_thumb">
                                            <img width="102" height="119" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb3.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="87" height="87" src="<?= BASE_URL ?>assets/img/others/game-vs2.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="105" height="119" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb4.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                    <div class="upcoming_gaming_text">
                                        <p>20 August 2021 - 09:00 PM</p>
                                        <h3><a href="match-details.html">Ninja 360 Game 2021</a></h3>
                                        <span>08 Teams Registered</span>
                                    </div>
                                    <div class="upcoming_play_video text-center">
                                        <a class="video_popup" href="https://www.youtube.com/watch?v=eS9Qm4AOOBY"><img width="53" height="44" src="<?= BASE_URL ?>assets/img/others/play-btn2.webp" alt=""></a> <br>
                                        <span>Twitch Stream</span>
                                    </div>
                                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                                        <div class="single_upcoming_thumb">
                                            <img width="118" height="119" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb5.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="87" height="87" src="<?= BASE_URL ?>assets/img/others/game-vs3.webp" alt="">
                                        </div>
                                        <div class="single_upcoming_thumb">
                                            <img width="100" height="119" src="<?= BASE_URL ?>assets/img/others/upcoming-game-thumb6.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="others_match_btn text-center">
                                <a class="btn btn-link" href="match.html">Other’s Match </a>
                            </div>
                        </div>
                    </section>
                    <!-- upcoming gaming section end -->

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
                                    <div class="testimonial_inner slick__activation slick_navigation" data-slick='{
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
                                    </div>
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
                <!-- page wrapper end -->

                <!--footer area start-->
                <footer class="footer_widgets">
                    <div class="main_footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main_footer_inner d-flex">
                                        <div class="footer_widget_list">
                                            <div class="footer_logo">
                                                <a href="#"><img aria-label="logo" width="215" height="79" src="<?= BASE_URL ?>assets/img/dynamics/logo_400x100.png" alt=""></a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="footer_bottom_inner d-flex justify-content-between">
                                        <div class="copyright_right">
                                            <p> © 2023 MADE WITH <i class="icofont-heart"></i> by <a href="https://hasthemes.com/">IT DYNAMICS</a></p>
                                        </div>
                                        <div class="footer_bottom_link_menu">
                                            <ul class="d-flex">
                                                <li><a href="about.html">Terms & Condition </a></li>
                                                <li><a href="about.html">Privacy Policy </a></li>
                                            </ul>
                                        </div>

                                        <div class="scroll__top_icon">
                                            <a id="scroll-top" href="#"><img aria-label="scroll-top" width="46" height="40" src="<?= BASE_URL ?>assets/img/icon/scroll-top.webp" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--footer area end-->


                <!-- JS
============================================ -->
                <!--modernizr min js here-->
                <script src="<?= BASE_URL ?>assets/js/vendor/modernizr-3.7.1.min.js"></script>

                <!-- Vendor JS -->
                <script src="<?= BASE_URL ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/vendor/popper.js"></script>
                <script src="<?= BASE_URL ?>assets/js/vendor/bootstrap.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/slick.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/wow.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/jquery.nice-select.js"></script>
                <script src="<?= BASE_URL ?>assets/js/jquery.magnific-popup.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/jquery.counterup.min.js"></script>
                <script src="<?= BASE_URL ?>assets/js/jquery-waypoints.js"></script>

                <!-- Typed JS -->
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

                <script type="text/javascript">
                    var typed = new Typed('.typedjs', {
                        strings: ["Preserving Youth Legacy through Social Movement & Competitions"],
                        typeSpeed: 40,
                        showCursor: false
                    });
                </script>

                <script type="text/javascript">

                    // Set the date we're counting down to
                    var countDownDate = new Date("Jan 25, 2023 00:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var hari = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var menit = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var detik = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the result in the element
                    document.getElementsByClassName('hari').innerHTML = hari
                    document.getElementsByClassName('jam').innerHTML = jam
                    document.getElementsByClassName('menit').innerHTML = menit
                    document.getElementsByClassName('detik').innerHTML = detik
                    }, 1000);
                </script>

                <!-- Main JS -->
                <script src="<?= BASE_URL ?>assets/js/main.js"></script>


</body>


</html>