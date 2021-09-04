<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Emmanuel Anyele - TheWalkingKode</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="TheWalkingKode" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="https://anchoratechs.com" />
    <meta property="og:site_name" content="TheWalkingKode" />
    <meta property="article:publisher" content="http://facebook.com/maysdelmundo" />
    <meta property="og:image" content="assets/img/favicon.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta name="author" content="TheWalkingKode">
    <link rel="author" href="http://facebook.com/anchoratechs" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/transition-animations.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <script src="assets/js//jquery-2.1.3.min.js"></script>
    <script src="assets/js//modernizr.custom.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <div id="page" class="page">
        <header id="site_header" class="header mobile-menu-hide">
            <div class="my-photo">
                <img src="assets/img/thewalkingkode.png" alt="Emmanuel Anyele - TheWalkingKode">
                <div class="mask"></div>
            </div>

            <div class="site-title-block">
                <h1 class="site-title">Emmanuel Anyele</h1>
                <p class="site-description">Software Developer</p>
            </div>
            <div class="site-nav">
                <ul id="nav" class="site-main-menu">
                    <li>
                        <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">Home</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#about_me" data-animation="59" data-goto="2">About me</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">Resume</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#portfolio" data-animation="61" data-goto="4">Portfolio</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#contact" data-animation="59" data-goto="5">Contact</a>
                    </li>
                </ul>
                <ul class="social-links">
                    <li><a class="tip social-button" target="_blank" href="https://linkedin.com/in/emmanuyelanyele" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tip social-button" target="_blank" href="https://twitter.com/ea_speaks" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="tip social-button" target="_blank" href="https://facebook.com/maysdelmundo" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="tip social-button" target="_blank" href="https://instagram.com/amarachi_emmanuel_anyele" title="InstaGram"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="tip social-button" target="_blank" href="https://instagram.com/ea_speaks" title="InstaGram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </header>
        <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
                <div class="mobile-site-title">Emmanuel Anyele</div>
            </div>
            <a class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div id="main" class="site-main">
            <div class="pt-wrapper">
                <div class="subpages">
                    <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url(assets/img/home_page_bg_2.jpg);" data-id="home">
                        <div class="home-page-block-bg">
                            <div class="mask"></div>
                        </div>
                        <div class="home-page-block">
                            <div class="v-align">
                                <h2>Emmanuel Anyele</h2>
                                <div id="rotate" class="text-rotate">
                                    <div>
                                        <p class="home-page-description">Software Designer</p>
                                    </div>
                                    <div>
                                        <p class="home-page-description">Frontend-Developer</p>
                                    </div>
                                    <div>
                                        <p class="home-page-description">UI-UX-Designer</p>
                                    </div>
                                    <div>
                                        <p class="home-page-description">Freelancer</p>
                                    </div>
                                </div>

                                <div class="block end" style="text-align: center">
                                    <ul class="info-list">
                                        <li><span class="title">Age</span><span class="value"><?php echo date('Y') - 1994; ?></span></li>
                                        <li><span class="title">Address</span><span class="value">Odorkor Official Town. Accra, Ghana</span></li>
                                        <li><span class="title">e-mail</span><span class="value"><a href="mailto:iam@thewalkingkode.com">[iam@thewalkingkode.com]</span></a></span></li>
                                        <li><span class="title">Phone</span><span class="value">+233 (0) 26 29 88 710</span></li>
                                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php require('data.php'); ?>

                    <?php require('html.about.php'); ?>
                    <?php require('html.resume.php'); ?>
                    <?php require('html.portfolio.php'); ?>
                    <?php require('html.contact.php'); ?>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/page-transition.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/validator.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
