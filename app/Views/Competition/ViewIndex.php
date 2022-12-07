<?= $this->extend('_Template\MainLayout') ?>

<!-- CSS Load -->
<?= $this->section('loadCss') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="breadcrumbs_aree breadcrumbs_bg mb-140" data-bgimg="assets/img/bg/breadcrumbs-bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text text-center">
                    <h1>Competition</h1>
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

    <!-- popular gaming  section start -->
    <div class="gaming_page_section mb-125">
        <div class="container">
            <div class="gaming_page_header mb-70">
                <form action="#">
                    <div class="gaming_header_inner d-flex justify-content-between">
                        <div class="gaming_form_left d-flex">
                            <div class="gaming_form_list">
                                <select>
                                    <option selected value="1">Category</option>
                                    <option value="2">Category2</option>
                                    <option value="3">Category3</option>
                                    <option value="4">Category4</option>
                                </select>
                            </div>
                            <div class="gaming_form_list">
                                <select>
                                    <option selected value="1">All Platform</option>
                                    <option value="2">Platform2</option>
                                    <option value="3">Platform3</option>
                                    <option value="4">Platform4</option>
                                </select>
                            </div>
                        </div>
                        <div class="gaming_form_search">
                            <input placeholder="Search here" type="text">
                            <button><i class="icofont-search-1"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="gaming_page_inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb1.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb2.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb3.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb4.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb5.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <a href="game-details.html"><img width="570" height="330" src="assets/img/others/popular-game-thumb2.webp" alt=""></a>
                            <div class="gaming_details_btn">
                                <a class="btn btn-link" href="game-details.html">Rulebook <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="others_gane_btn text-center">
                <a class="btn btn-link" href="#">Other’s Game </a>
            </div>
        </div>
    </div>
    <!-- popular gaming section end -->

    <!-- counterup section start -->
    <section class="counterup_section wow fadeInUp mb-130" data-wow-delay="0.1s" data-wow-duration="1.1s">
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

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="contact_info_list left wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <div class="contact_info_thumb">
                    <img width="115" height="115" src="assets/img/icon/email.webp" alt="">
                </div>
                <div class="contact_info_text">
                    <h3>Lomba Baca Puisi</h3>
                    <p>
                        <a href="/">Rulebook</a> <br>
                        <a href="/">Register</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="contact_info_list center wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg2.webp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <div class="contact_info_thumb">
                    <img width="115" height="115" src="assets/img/icon/location.webp" alt="">
                </div>
                <div class="contact_info_text">
                    <h3>Location:</h3>
                    <p>100 N Aurora Ave #APT 19
                        Oakland, Nebraska(NE), 68045</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="contact_info_list right wow fadeInUp" data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                <div class="contact_info_thumb">
                    <img width="115" height="115" src="assets/img/icon/phone.webp" alt="">
                </div>
                <div class="contact_info_text">
                    <h3>Phone:</h3>
                    <p>
                        <a href="tel:(402)685-5964"> (402) 685-5964</a>
                        <a href="tel:+88(00)4568457437"> +88 (00) 4568 457 437</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- gaming update section start -->
    <section class="gaming_update_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_update_inner d-flex justify-content-between align-items-center" data-bgimg="assets/img/bg/gaming-update.webp">
                        <div class="gaming_update_text">
                            <h2>Connect with us <br>
                                for gamING update.</h2>
                        </div>
                        <div class="gaming_update_btn">
                            <a class="btn btn-link" href="contact.html">CONNECT NOW <img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming update section end -->

</div>
<?= $this->endSection() ?>