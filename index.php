<?php 
include_once 'components/clsFunctions.php';

$folder = 'images/galerija';
$fajl = 'docs/youtube_linkovi.txt';

$slike = clsFunctions::procitajSlikeIzFoldera($folder);
$youtube = clsFunctions::procitajLinkoveIzFajla($fajl);

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>AS - Orkestar</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Bojic Ivan">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, as, band, uzice, orkestar, muzika">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/img/as_logo.png">
        <link rel="apple-touch-icon" href="images/img/as_logo.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/img/as_logo.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/img/as_logo.png">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg">
                <div class="container-lg nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto ps-0">
                        <a href="index.html" title="As" class="logo"><img src="images/img/as_logo.png" data-at2x="images/img/as_logo.png" class="logo-dark" alt="As Orkestar"><img src="images/img/as_logo.png" data-at2x="images/img/as_logo.png" alt="As" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->

                    <audio id="audioPlayer" controls autoplay>
                        <source src="docs/As_Orkestar.mp3" type="audio/mpeg">
                    </audio>
                      
                    <div class="col-auto col-lg accordion-menu pe-0">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav alt-font font-weight-700">
                                <li><a href="#home" title="Home" class="inner-link">Početna</a></li>
                                <li><a href="#about" title="About" class="inner-link">O nama</a></li>
                                <li><a href="#team" title="Team" class="inner-link">Naš tim</a></li>
                                <li><a href="#work" title="Work" class="inner-link">Galerija</a></li>
                                <li><a href="#clients" title="Clients" class="inner-link">Video</a></li>
                                <li><a href="#contact" title="Contact" class="inner-link">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->  
        </header>
        <!-- end header -->

        <!-- GLAVNI BANER-->
        <!-- start hero section -->
        <!-- 1920x1200 -->
        <section id="home" class="p-0 parallax mobile-height wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url('images/img/main_banner.jpg');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container position-relative full-screen">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <!-- <img src="images/img/main_banner.jpg" alt=""/> -->
                        <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- O NAMA -->
        <!-- start services section -->
        <section id="about" class="bg-light-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin about-us">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">As Orkestar - Muzička magija za vaše slavlje</h5>
                        <p class="mb-0"><strong>As Orkestar</strong> je vaša destinacija za vrhunsko muzičko iskustvo koje će oplemeniti vaše slavlje.</p>
                        <p class="mb-0">Sa našim talentovanim muzičarima i širokim izborom repertoara, mi smo tu da stvorimo nezaboravnu atmosferu.</p>
                        <p class="mb-0">Neka zvuci naše muzike ispune vaše srce i energiju koja će Vas pokrenuti.</p>
                        <p class="mb-0">Pozovite nas i oživite svoje veselje uz <strong>As Orkestar</strong>.</p>
                    </div>  
                </div>
            </div>
        </section>
        <!-- end services section -->
           
        <!-- LINK BANER -->
        <!-- start parallax section -->
        <!-- 1920x1200 -->
        <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.3" style="background-image:url('images/img/youtube_banner.jpg');">
            <div class="opacity-extra-medium bg-black"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 col-sm-10 text-center last-paragraph-no-margin">
                        <a class="" href="https://www.youtube.com/@nemanjamilivojevic7694" target="_blank"><img src="images/icon-play.png" class="w-130px" alt=""/></a>
                        <h4 class="alt-font text-white-2 margin-15px-bottom sm-margin-20px-bottom"></h4>
                        <p class="text-extra-large font-weight-300 text-light-gray w-85 sm-w-100 d-inline-block margin-25px-bottom"></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax section -->

        <!-- INFO SEKCIJA -->
        <!-- start accordion section -->
        <section class="bg-light-gray border-none p-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col padding-seven-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow animate__fadeInLeft">
                        <h5 class="alt-font text-extra-dark-gray text-center text-lg-start margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">Harmonija zvuka i radosti:</span>Pružamo nezaboravno muzičko iskustvo za vaša slavlja.</h5>
                        <!-- start accordion -->
                        <div class="panel-group accordion-event accordion-style2" id="accordion-main" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block">Rani počeci i muzički talenat: Putovanje sa harmonikom</span>
                                            <i class="fas fa-angle-up text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" data-bs-parent="#accordion-main">
                                    <div class="panel-body">
                                        Uz ljubav prema muzici, počeo sam da sviram harmoniku sa samo šest godina. 
                                        Još tada je primećen moj talenat kada sam precizno otpevao jednu pesmu na jednoj svadbi u našem komšiluku. 
                                        Oduvek sam voleo pozitivne ljude, druženje i muziku, i zato sam nastavio da se usavršavam. 
                                        Moji nastupi na brojnim takmičenjima i događajima, uključujući RTS Sabor narodne muzike zajedno sa sestrom, 
                                        koja je talentovana pesnikinja kao i profesorka engleskog jezika, doneli su nam velika dostignuća.
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block">Ispunite srca i stvorite nezaboravne trenutke</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                                    <div class="panel-body">
                                        Naš najveći uspeh leži u tome da ispunimo vaša srca i trenutke radosti. 
                                        Nudimo muzičko iskustvo za sva vaša slavlja, bilo da su u pitanju svadbe, rođendani ili bilo koja druga veselja. 
                                        Naša strast za muzikom, zajedno sa veštinom sviranja harmonike i talentom za pisanje pesama, 
                                        obećava nezaboravne trenutke na vašim slavljima. Svestrani smo i prilagođavamo se vašim željama, 
                                        jer je naš cilj da vaša proslava bude neponovljiva i posebna.
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseThree">
                                        <div class="panel-title">
                                            <span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>
                                            <span class="text-extra-dark-gray sm-w-80 d-inline-block">Pozovite nas i stvorite magičnu atmosferu na vašem slavlju</span>
                                            <i class="fas fa-angle-down text-extra-dark-gray"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                                    <div class="panel-body">
                                        Pozovite nas i dogovorite se sa nama kako bismo zajedno stvorili magičnu atmosferu na vašem slavlju. 
                                        Naša muzika će ispuniti prostor veseljem i emocijama. Bez obzira na vrstu proslave koju planirate, mi smo tu da pružimo vrhunski muzički doživljaj. 
                                        Sa dugogodišnjim iskustvom i strašću za muzikom, garantujemo da ćemo učiniti vaše slavlje nezaboravnim.
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end accordion -->
                    </div>
                    <!-- 1200x854 -->
                    <div class="col cover-background md-h-500px sm-h-350px wow animate__fadeInRight" style="background:url('images/img/biography.jpg'); border: 10px solid #f7f7f7;"></div>
                </div>
            </div>
        </section>
        <!-- end accordion section -->
        
        <!-- TIM -->
        <!-- start team section
        <section id="team" class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Naš tim</h5>
                    </div>  
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    
                    <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="https://via.placeholder.com/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Herman Miller</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp" data-wow-delay="0.2s">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="https://via.placeholder.com/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Jeremy Dupont</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Creative Director</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp" data-wow-delay="0.4s">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="https://via.placeholder.com/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Sara Smith</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Creative Studio Head</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div class="col team-block text-start team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow animate__slideInUp"  data-wow-delay="0.6s">
                        <figure>
                            <div class="team-image sm-w-100">
                                <img src="https://via.placeholder.com/700x892" alt="">
                                <div class="team-overlay bg-deep-pink"></div>
                                <div class="team-member-position text-center margin-25px-top">
                                    <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Bill Gardner</div>
                                    <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                </div>
                            </div>
                            <figcaption>
                                <div class="overlay-content text-center icon-social-small">
                                    <span class="text-small d-inline-block m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry dummy text.</span>
                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb"></div>
                                    <a href="http://www.facebbok.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://www.twitter.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.plus.google.com.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="http://www.instagram.com" class="text-extra-dark-gray" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
            </div>
        </section>
        end team section -->

        <!-- GALERIJA -->
        <!-- start masonry portfolio section -->
        <section id="work" class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-eight-bottom text-center last-paragraph-no-margin md-margin-40px-bottom sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase margin-15px-bottom">Galerija</h5>
                    </div>  
                </div>
                <div class="row gallery-row">
                    <?php foreach ($slike as $slika) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6 img-thumbnail gallery-item grid-item">
                            <img class="thumbnail-image" src="<?= $slika ?>" alt=""/>
                        </div>
                    <?php } ?>
                </div>
        
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body"></div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>

            <div id="fullscreen-overlay">
                <div id="fullscreen-container">
                  <img id="fullscreen-image" src="" alt="">
                  <span id="close-button">&times;</span>
                  <span id="prev-button">&lt;</span>
                  <span id="next-button">&gt;</span>
                </div>
              </div>

        </section>
        <!-- end masonry portfolio section -->

        <!-- YOUTUBE SNIMCI -->
        <!-- start clients slider section  -->
        <section id="clients" class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.4">
            <div class="opacity-medium bg-light-gray"></div>
            <div class="container text-center">
                <div class="row">    
                    <div class="swiper-container white-move" data-slider-options='{ "slidesPerView":"1", "loop":true, "autoplay":{"delay":3000 }, "stopOnLastSlide":true, "disableOnInteraction":false, "keyboard":true, "mousewheel":false, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true }, "breakpoints":{ "768":{ "slidesPerView":"3" },"992":{ "slidesPerView":"3" }, "1200":{ "slidesPerView":"3" } } }'>
                        <div class="swiper-wrapper">
                            <?php foreach ($youtube as $y) { ?>
                                <!-- start slider item --><div class="swiper-slide text-center"><iframe width="95%" height="100%" src="<?= $y; ?>" frameborder="0" allowfullscreen></iframe></div><!-- end slider item -->
                            <?php } ?>
                        </div>
                    </div>
                    <!-- start swiper pagination -->
                        <div class="swiper-pagination swiper-pagination-square"></div> 
                    <!-- end swiper pagination -->
                </div>    
            </div>
        </section>
        <!-- end clients slider section -->

        <!-- KONTAKT FORMA -->
        <!-- start contact section -->
        <section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2">
                    <!-- 1200x854 -->
                    <div class="col cover-background md-h-550px sm-h-350px wow animate__fadeIn" style="background: url(images/img/contact_form.jpg)"></div>
                    <div class="col padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow animate__fadeIn">
                        <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom">Popunite formu i mi ćemo Vas uskoro kontaktirati!</div>
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom">Kontaktirajte nas</h5>
                        <div>
                            <form id="contact-form-2" action="email-templates/contact-form.php" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-12 wow animate__fadeIn text-center">
                                        <div class="form-results d-none"></div>
                                        <input type="text" name="name" id="name" placeholder="Ime i prezime*" class="input-border-bottom required">
                                        <input type="email" name="email" id="email" placeholder="E-mail*" class="input-border-bottom required">
                                        <input type="tel" id="subject" name="subject" placeholder="Naslov" class="input-border-bottom">
                                        <textarea name="comment" id="comment" placeholder="Poruka" class="input-border-bottom"></textarea>
                                        <button id="contact-us-button-2" type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top submit">Pošalji</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact section -->

        <!-- KONTAKT PODACI -->
        <!-- start features section -->
        <section class="wow animate__fadeIn border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start features box item -->
                    <div class="col text-center md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                        <!-- <i class="icon-map-pin icon-medium margin-25px-bottom sm-margin-10px-bottom"></i> -->
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col text-center md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <i class="icon-chat icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom"></div>
                        <p class="w-70 lg-w-85 md-w-55 sm-w-75 sm-margin-10px-bottom mx-auto">Telefon: <a href="tel:+381656656636">065/66-56-636</a></p>
                        <a href="tel:+381656656636" class="margin-15px-top d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">Pozovite nas</a>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col text-center sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <i class="icon-envelope icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom"></div>
                        <p class="w-70 lg-w-85 md-w-55 sm-w-75 sm-margin-10px-bottom mx-auto"><a href="mailto:asorkestar@outlook.com">asorkestar@outlook.com</a></p>
                        <a href="mailto:asorkestar@outlook.com" class="margin-15px-top d-inline-block text-uppercase text-deep-pink text-small sm-no-margin-top">Pošaljite e-mail</a>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col text-center wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <!-- <i class="icon-megaphone icon-medium margin-25px-bottom sm-margin-10px-bottom"></i> -->
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end features section -->
        <!-- start footer --> 
        <footer class="footer-strip bg-light-gray padding-50px-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start logo -->
                    <div class="col-md-3 text-center text-lg-start sm-margin-20px-bottom">
                        <a href="index.html"><img class="footer-logo" src="images/img/as_logo.png" data-at2x="images/img/as_logo.png" alt="As"></a>
                    </div> 
                    <!-- end logo -->
                    <!-- start copyright -->
                    <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom">
                        
                    </div>
                    <!-- end copyright -->
                    <!-- start social media -->
                    <div class="col-md-3 text-center text-lg-end">
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook text-black" href="https://www.facebook.com/nemanja.milivojevic.77" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="instagram text-black" href="https://www.instagram.com/nemanja_milivojevic_/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="google text-black" href="mailto:asorkestar@outlook.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>