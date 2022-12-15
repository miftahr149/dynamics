<?= $this->extend('MainLayout') ?>

<!-- CSS Load -->
<?= $this->section('loadCss') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="page_wrapper">
    <section class="hero_banner_section d-flex align-items-center mb-130" data-bgimg="<?= BASE_URL ?>assets/img/bg/hero-bg1.webp">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center" align="center">
                    <div class="hero_content">
                        <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">DYNAMICS 2023</h1>
                        <p class="wow fadeInUp typedjs"></p>
                        <a class="btn btn-link wow fadeInUp magic-hover magic-hover__square" data-wow-delay="0.3s" data-wow-duration="1.3s" href="<?php echo BASE_URL . "competition" ?>">Join Now<img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt="arrrow-icon.webp"> </a>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="hero_position_img">
            <img width="926" height="772" src="<?= BASE_URL ?>assets/img/dynamics/mascot1.png" alt="maskot_hero.webp">
        </div>
-->
    </section>

    <!-- Countdown -->
    <section class="gaming_world_section mb-140">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>EVENT STARTED IN</h2>
            </div>
            <div class="gaming_world_inner">
                <div id="countdown-js" class="wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s"></div>
            </div>
        </div>
    </section>
    <!-- Countdown End -->

    <!-- About Dynamics -->
    <section class="popular_gaming_section mb-140" id="about">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2>ABOUT DYNAMICS</h2>
            </div>
            <div class="popular_gaming_inner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog_details_desc">
                            <p align="left" style="font-size: 18px">
                                Dynamics 2023 merupakan ajang penguatan dan peningkatan jiwa
                                kepemimpinan pelajar di-Indonesia khususnya di wilayah Jabodatabek, yang
                                nantinya diharapkan dapat mengemban peran vital dilingkungan eksternal
                                maupun internal. Agenda tahunan ini dipersembahkan organisasi siswa/i SMP IT
                                Nurul Fikri Bogor dengan mengusung tema "Preserving Youth Legacy through
                                Social Movement and Competition". </p>
                            <p align="left" style="font-size: 18px">
                                Serangkaian agenda Dynamics 2023
                                disusun sebagai kontribusi kami untuk memberdayakan potensi pemuda untuk
                                menjadi seorang impact maker muda diantaranya, Nurul Fikri Leader League,
                                Youth Charity Concert, dan Next Leader Competitions.
                            </p>
                            <div class="sing_up_btn">
                                <a class="btn btn-link magic-hover magic-hover__square" href="registration.html">CLICK HERE<img width="15" height="15" src="assets/img/icon/arrrow-icon2.webp" alt="sdfs"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- <img class="mg-fluid animate__shakeY" src="<?= BASE_URL ?>assets/img/dynamics/mascot.png" alt=""> -->
                        <div class="mascot-container magic-hover magic-hover__square">
                            <div class="Mascot">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/mascot1.png">
                            </div>

                            <div class="Mascot">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/mascot2.png">
                            </div>

                            <div class="Mascot">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/mascot3.png">
                            </div>

                            <div class="Mascot">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/mascot4.png">
                            </div>

                            <div class="Mascot">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/mascot5.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Dynamics End -->

    <!-- Competitions -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>TIMELINE</h2>
            </div>
            <div class="upcoming_gaming_inner magic-hover magic-hover__square">
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="upcoming_gaming_text">
                        <p>15 December 2022 ~ 15 January 2023</p>
                        <h3>OPEN REGISTRATION</h3>
                        <span>Pendaftaran dapat dilakukan dengan mengisi formulir di website <a href="https://dynamics.nfbs-bogor.sch.id/competition">dynamics.nfbs-bogor.sch.id</a></span>
                    </div>
                </div>

                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.2s" data-wow-duration="1.2s">
                    <div class="upcoming_gaming_text">
                        <p>12 January 2023</p>
                        <h3>TECHNICAL MEETING 1</h3>
                        <span>Technical meeting untuk perlombaan yang diadakan secara daring (online)</span>
                    </div>
                </div>

                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>21 January 2023</p>
                        <h3>TECHNICAL MEETING 2</h3>
                        <span>Technical meeting untuk perlombaan yang diadakan secara luring (offline)</span>
                    </div>
                </div>
                <br>
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>25 January 2023</p>
                        <h3>OPENING NFLL</h3>
                        <span>Acara NFLL dibuka dan para peserta melakukan karantina di SMPIT NFBS Bogor</span>
                    </div>
                </div>
                <br>
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>25 January 2023 ~ 28 January 2023</p>
                        <h3>DYNAMICS FESTIVAL 2023</h3>
                        <span>Acara perlombaan DYNAMICS 2023 berlangsung.</span>
                    </div>
                </div>
                <br>
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>28 January 2023</p>
                        <h3>CLOSING CEREMONY</h3>
                        <span>Youth charity cobcert fun bazaar.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Merchandise -->
    <section class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>DYNAMICS MERCHANDISE</h2>
            </div>
            <img width="100%" height="80%" class="merchandise wow FadeInUp magic-hover magic-hover__square" src="http://192.168.100.100/dynamic/assets/images/merchand/MERCH.png"></img>
            <div class="others_match_btn text-center">
                <a class="btn btn-link magic-hover magic-hover__square" href="javascript:void(0)" onclick="NotReady()">Buy Now</a>
            </div>
        </div>
    </section>

    <!-- Merchandise -->

    <section class="testimonial_section wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div id="gallery">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <h2>GALLERY</h2>
                    <p>Dynamics 22 Activities Documentation</p>
                </div>
                <div class="gallery magic-hover magic-hover__square">
                    <div class="gallery__column">
                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F1.JPG" alt="Portrait by Jessica Felicio" class="gallery__image">
                                <figcaption class="gallery__caption">Scout Activities</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F2.JPG" alt="Portrait by Oladimeji Odunsi" class="gallery__image">
                                <figcaption class="gallery__caption">Broadcasting</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F3.JPG" alt="Portrait by Alex Perez" class="gallery__image">
                                <figcaption class="gallery__caption"></figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="gallery__column">
                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F4.JPG" alt="Portrait by Noah Buscher" class="gallery__image">
                                <figcaption class="gallery__caption">Story Telling</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F5.JPG" alt="Portrait by Ivana Cajina" class="gallery__image">
                                <figcaption class="gallery__caption">Drawing Competition</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F6.JPG" alt="Portrait by Sam Burriss" class="gallery__image">
                                <figcaption class="gallery__caption">Futsal Competition</figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="gallery__column">
                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F7.JPG" alt="Portrait by Mari Lezhava" class="gallery__image">
                                <figcaption class="gallery__caption">Archery</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F8.JPG" alt="Portrait by Ethan Haddox" class="gallery__image">
                                <figcaption class="gallery__caption">Archery</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F9.JPG" alt="Portrait by Amir Geshani" class="gallery__image">
                                <figcaption class="gallery__caption">Scout Activities</figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="gallery__column">
                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F10.JPG" alt="Portrait by Guilian Fremaux" class="gallery__image">
                                <figcaption class="gallery__caption">Scout Activities</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F11.JPG" alt="Portrait by Jasmin Chew" class="gallery__image">
                                <figcaption class="gallery__caption">Scout Activities</figcaption>
                            </figure>
                        </a>

                        <a href="#gallery" target="_blank" class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="<?= BASE_URL ?>assets/img/dynamics/gallery/F12.JPG" alt="Portrait by Dima DallAcqua" class="gallery__image">
                                <figcaption class="gallery__caption">Scout Activities</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section class="gaming_video_section mb-118 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <h2 ALIGN="center">SPONSORS</h2>
        <p ALIGN="center">Dynamics 23 Media & Sponsors</p>
        <br>
        <div class="container magic-hover magic-hover__square">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_video_inner slick_navigation slick__activation" data-slick='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,  
                            "responsive":[ 
                            {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
                            ]                                                     
                        }'>
                        <div class="gaming_video_thumb">
                            <img width="1170" height="540" src="assets/img/jamkrindo.webp" alt="jamkrindo.webp">

                            <div class="live_streaming_text">
                                <h3>S P O N S O R S H I P</h3>
                            </div>
                        </div>
                        <div class="gaming_video_thumb">
                            <img width="1170" height="540" src="assets/img/sagha.webp" alt="sagha.webp">

                            <div class="live_streaming_text">
                                <h3>S P O N S O R S H I P</h3>
                            </div>
                        </div>
                        <div class="gaming_video_thumb">
                            <img width="1170" height="540" src="assets/img/arroyyan.webp" alt="arroyyan.webp">

                            <div class="live_streaming_text">
                                <h3>S P O N S O R S H I P</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection() ?>

<?= $this->section('loadJs') ?>
<script src="<?= BASE_URL ?>assets/js/jquery.countdown.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script type="text/javascript">
    var slideIndex = 0;
    $(document).ready(function() {
        showSlides();
    });

    function NotReady() {
        Swal.fire(
            'Dynamics 2023',
            'Sorry, this menu is not yet available',
            'warning'
        )
    }

    var typed = new Typed('.typedjs', {
        strings: ["Preserving Youth Legacy through Social Movement <br>& Competitions"],
        typeSpeed: 50,
        backSpeed: 20,
        showCursor: true,
        cursorChar: '|',
        loop: true,
    });


    $("#countdown-js")
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

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("Mascot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }

        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 1500);
    }
</script>


<?= $this->endSection() ?>