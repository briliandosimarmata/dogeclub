<!doctype html>
<?php
session_start();
include 'check.php';
?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>DogeClub</title>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="../https://unpkg.com/feather-icons"></script>
    
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <!--<div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>-->
    <!-- MainMenu-Area -->
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <a class="white-color" href="/index.php">
                        <h1 class="wow fadeInUp dogeclub" data-wow-delay="0.4s">
                            DOGECLUB.ONLINE
                        </h1>
                    </a>
                    <div class="space-20"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- Member-Area -->
    <section class="section-padding">
        <div class="dark-color justify-content-center">
            <h5>Member Area</h5>
        </div>
    </section>
    <!-- About-Area -->
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <h3>Welcome</h3>
                    <?php
                    echo $_SESSION["email"]
                    ?>
                <button class="bttn-white" data-feather="credit-card">
                    <a href="logout.php" class="dark-color">Logout</a>
                </button>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Copyright 2019 © Dogeclub.online</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/vendor/jquery-ui.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/contact-form.js"></script>
    <script src="../js/ajaxchimp.js"></script>
    <script src="../js/scrollUp.min.js"></script>
    <script src="../js/magnific-popup.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="../js/main.js"></script>
    <script>
    feather.replace()
    </script>
</body>

</html>
