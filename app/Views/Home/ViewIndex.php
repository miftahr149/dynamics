<?= $this->extend('_Template\MainLayout') ?>

<!-- CSS Load -->
<?= $this->section('loadCss') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="page_wrapper">

    <section class="hero_banner_section d-flex align-items-center mb-130" data-bgimg="<?= BASE_URL ?>assets/img/bg/hero-bg1.webp">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero_content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">DYNAMICS 2023</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Preserving Youth Legacy through Social Movement</p>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s" href="all-game.html">Play Now <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_position_img">
            <img width="926" height="772" src="<?= BASE_URL ?>assets/img/maskot_hero.webp" alt="maskot_hero.webp">
        </div>
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
                            <div class="sing_up_btn">
                                <a class="btn btn-link" href="registration.html">CLICK HERE  <img width="15" height="15" src="assets/img/icon/arrrow-icon2.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="#"><img width="570" height="330" src="<?= BASE_URL ?>assets/img/dynamics/mascot.png" alt=""></a>
                        <div class="gaming_details_btn">
                            <a class="btn btn-link" href="game-details.html">Game Details <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Target -->
    <!-- <section class="counterup_section mb-115 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
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
    </section> -->
    <!-- Our Target End -->

    <!-- Timeline -->
    <!-- FontAwesome -->
    <!-- <section class="popular_gaming_section mb-140">
        <h2>Timeline</h2>
        <br>
        <div class="container-timeline">
            <div class="timeline">
                <div class="timeline-container primary">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="timeline-body">
                        <h4 class="timeline-title"><span class="badge">20 December 2022</span></h4>
                        <h3>Open Registration</h3>
                        <p class="timeline-subtitle">20 December 2022</p>
                    </div>
                </div>
                <div class="timeline-container danger">
                    <div class="timeline-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <div class="timeline-body">
                        <h4 class="timeline-title"><span class="badge">30 December 2022</span></h4>
                        <h3>Technical Meeting</h3>
                        <p class="timeline-subtitle">30 December 2022</p>
                    </div>
                </div>
                <div class="timeline-container success">
                    <div class="timeline-icon">
                        <i class="fa-brands fa-font-awesome"></i>
                    </div>
                    <div class="timeline-body">
                        <h4 class="timeline-title"><span class="badge">4 January 2023</span></h4>
                        <h3>Dynamics 2023</h3>
                        <p class="timeline-subtitle">6 Hours Ago</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Timeline End -->

    <!-- Competitions -->
    <section class="upcoming_gaming_section mb-125">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-60" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>TIMELINE</h2>
            </div>
            <div class="upcoming_gaming_inner">
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="upcoming_gaming_text">
                        <p>20 December 2022</p>
                        <h3>OPEN REGISTRATION</h3>
                        <span>08 Teams Registered</span>
                    </div>

                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                        <a class="btn btn-link" href="#">REGISTRATION</a>
                        <div class="single_upcoming_thumb">
                            <img width="102" height="119" src="assets/img/astronot-roket.webp" alt="astronot-roket.webp">
                        </div>
                    </div>
                </div>
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center mb-30" data-wow-delay="0.2s" data-wow-duration="1.2s">
                    <div class="upcoming_gaming_text">
                        <p>30 December 2022</p>
                        <h3>TECHNICAL MEETING</h3>
                        <span>08 Teams Registered</span>
                    </div>
                    
                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                        <div class="single_upcoming_thumb">
                        <img src="assets/img/astronot-roket.webp" alt="astronot-roket.webp">
                        <img src="assets/img/astronot-roket2.webp" alt="astronot-roket2.webp">
                        </div>                       
                    </div>
                </div>
                <div class="upcoming_gaming_list wow fadeInUp d-flex justify-content-between align-items-center" data-wow-delay="0.3s" data-wow-duration="1.3s">
                    <div class="upcoming_gaming_text">
                        <p>4 January 2023</p>
                        <h3>DYNAMICS 2023</h3>
                        <span>08 Teams Registered</span>
                    </div>
                  
                    <div class="upcoming_gaming_thumb d-flex align-items-center">
                        <div class="single_upcoming_thumb">
                            <img src="assets/img/maskot-dynamic-event.webp" alt="maskot-dynamic-event.webp">
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>DYNAMICS MERCHANDISE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna</p>
            </div>
            <img width="100%" height="80%" class="merchandise wow FadeInUp" src="http://192.168.100.100/dynamic/assets/images/merchand/MERCH.png"></img>
            <div class="merchandisebtn">
                <a class="btn btn-link" href="contact.html">BUY NOW</a>
            </div>
        </div>
    </section>

    <section class="blog_section mb-90">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Competitions</h2>
                <p>Dynamics 2022 Hadir Dengan 100 Kompetisi yang Diadakan Online & Offline.</p>
                <div class="competitionbutton text-center wow fadeInUp mb-70">
                    <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s" href="all-game.html">REGISTER NOW</a>
                </div>
            </div>
            <!-- Competitions End -->

            <!-- Gallery -->
            <section class="testimonial_section wow fadeInUp" data-bgimg="<?= BASE_URL ?>assets/img/others/testimonial-bg-fullwidth.webp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <div class="container">
                    <h2>GALLERY</h2>
                    <br>
                    <div class="gallery">
                        <div class="gallery__column">
                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="http://192.168.100.100/dynamic/assets/images/blog/gallery4.jpg" alt="Portrait by Jessica Felicio" class="gallery__image">
                                    <figcaption class="gallery__caption">Arching Competition</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="http://192.168.100.100/dynamic/assets/images/blog/gallery5.jpg" alt="Portrait by Oladimeji Odunsi" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Oladimeji Odunsi</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/VLPLo-GtrIE/300x300" alt="Portrait by Alex Perez" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Alex Perez</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="gallery__column">
                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/AR7aumwKr2s/300x300" alt="Portrait by Noah Buscher" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Noah Buscher</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/dnL6ZIpht2s/300x300" alt="Portrait by Ivana Cajina" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Ivana Cajina</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/tV_1sC603zA/300x500" alt="Portrait by Sam Burriss" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Sam Burriss</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="gallery__column">
                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/Xm9-vA_bhm0/300x500" alt="Portrait by Mari Lezhava" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Mari Lezhava</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/NTjSR3zYpsY/300x300" alt="Portrait by Ethan Haddox" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Ethan Haddox</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/2JH8d3ChNec/300x300" alt="Portrait by Amir Geshani" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Amir Geshani</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="gallery__column">
                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/FQhLLehm4dk/300x300" alt="Portrait by Guilian Fremaux" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Guilian Fremaux</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/OQd9zONSx7s/300x300" alt="Portrait by Jasmin Chew" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Jasmin Chew</figcaption>
                                </figure>
                            </a>

                            <a href="#" target="_blank" class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="https://source.unsplash.com/XZkEhowjx8k/300x500" alt="Portrait by Dima DallAcqua" class="gallery__image">
                                    <figcaption class="gallery__caption">Portrait by Dima DallAcqua</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
            </section>
            <!-- Gallery End -->

            <!-- Merchandise -->
            <section class="blog_section mb-90">
                <div class="container">
                    <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>DYNAMICS MERCHANDISE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna</p>
                    </div>
                    <img width="100%" height="80%" class="merchandise wow FadeInUp" src="http://192.168.100.100/dynamic/assets/images/merchand/MERCH.png"></img>
                    <div class="merchandisebtn">
                        <a class="btn btn-link" href="contact.html">BUY NOW</a>
                    </div>
                </div>
            </section>
            <!-- Merchandise -->

            <!-- Sponsor -->
            <section class="blog_section mb-90">
                <div class="container">
                    <div class="section_title text-center wow fadeInUp mb-70" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>SPONSORS</h2>
                        <p>Dynamics 23 Media Partner & Sponsor</p>
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
</div>
<?= $this->endSection() ?>

<?= $this->section('loadJs') ?>
<script src="<?= BASE_URL ?>assets/js/jquery.countdown.min.js"></script>
<script type="text/javascript">
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
</script>
<?= $this->endSection() ?>
>>>>>>> khoirul