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

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/timeline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <?= $this->renderSection('loadCss') ?>
</head>

<body class="body__bg" data-bgimg="<?= BASE_URL ?>assets/img/bg/body-bg.webp">
    <!--header area start-->
    <header class="header_section header_transparent sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="#"><img aria-label="logo" width="215" height="79" src="<?= BASE_URL ?>assets/img/dynamics/dynamicsresize.webp" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="<?php echo BASE_URL ?>">HOME</a></li>
                                    <li><a href="#about">ABOUT</a></li>
                                    <li><a href="<?php echo BASE_URL . 'competition' ?>">COMPETITION</a></li>
                                    <li><a href="<?php echo BASE_URL . 'homestay' ?>">HOMESTAY</a></li>
                                    <li><a href="<?php echo BASE_URL . 'contact' ?>">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header_right_sidebar d-flex align-items-center">
                            <div class="sing_up_btn">
                                <a class="btn btn-link" href="registration.html">JOIN NOW <img width="15" height="15" src="assets/img/icon/arrrow-icon2.webp" alt=""> </a>
                            </div>
                            <div class="canvas_open">
                                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i class="icofont-navigation-menu"></i></button>
                            </div>
                        </div>
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
        <div class="offcanvas-body">
            <ul class="offcanvas_main_menu">
                <li class="menu-item-has-children"><a href="<?php echo BASE_URL ?>">HOME</a></li>
                <li class="menu-item-has-children"><a href="#about">ABOUT</a></li>
                <li class="menu-item-has-children"><a href="<?php echo BASE_URL . 'competition' ?>">COMPETITION</a></li>
                <li class="menu-item-has-children"><a href="<?php echo BASE_URL . 'homestay' ?>">HOMESTAY</a></li>
                <li class="menu-item-has-children"><a href="<?php echo BASE_URL . 'contact' ?>">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!-- page wrapper start -->
    <?= $this->renderSection('content') ?>
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
                                    <div class="footer_widget_list contact">
                                        <h3 align="left">Contact Us</h3>
                                        <div class="footer_contact_info">
                                            <div text-align="left" class="footer_contact_info_list">
                                                <p align="left">Nurul Fikri Boarding School Bogor, Jl Jami, Sukaluyu, Tamansari, Bogor, Jawa Barat, 16610 </p>
                                                <p align="left">
                                                    <i class="fa-brands fa-telegram"></i> 0812345678 (Orang Public)<br>
                                                    <i class="fa-brands fa-telegram"></i> 0812345678 (Orang Public)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_widget_list contact">
                                <h3>Our Location</h3>
                                <div class="footer_contact_info">
                                    <div class="footer_menu">
                                        <div class="IframeMaps">
                                            <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.3758142809018!2d106.73936127916559!3d-6.646111334943906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cfe9c107505b%3A0x4735acf516e63e79!2sNFBS%20Bogor!5e0!3m2!1sid!2sid!4v1670491685373!5m2!1sid!2sid" width="400" height="300" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_widget_list footer_list_menu">
                                <h3>Social Media</h3>
                                <div class="footer_social">
                                    <ul class="d-flex">
                                        <li><a aria-label="facebook" class="facebook" href="https://www.facebook.com"><i class="icofont-facebook"></i></a></li>
                                        <li><a aria-label="dribble" class="dribbble" href="https://dribbble.com"><i class="icofont-dribbble"></i></a></li>
                                        <li><a aria-label="youtube" class="youtube" href="https://www.youtube.com"><i class="icofont-youtube-play"></i></a></li>
                                        <li><a aria-label="twitter" class="twitter" href="https://twitter.com"><i class="icofont-twitter"></i></a></li>
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

    <!-- Main JS -->
    <script src="<?= BASE_URL ?>assets/js/main.js"></script>
    <?= $this->renderSection('loadJs') ?>



</body>

</html>