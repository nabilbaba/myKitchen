<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Kitchen</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetsVisiteur/assets/img/N.png" rel="icon">
    <link href="assetsVisiteur/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetsVisiteur/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetsVisiteur/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="assetsVisiteur/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyKitchen - v4.1.0²
  * Template URL: https://bootstrapmade.com/MyKitchen-free-business-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">mykitchen@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+213 559 585488</span></i>
            </div>
            <div class="social-links d-none d-md-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="../html1.html">My<span>Kitchen</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{route('recettesDetails')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @yield('content')

        </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>MyKitchen</h3>
                            <p>
                                Universitaire Abou Bakr Belkaid Tlemcen <br>TLEMCEN, ALGERIA<br><br>
                                <strong>Phone:</strong>+213 5589 22475 14<br>
                                <strong>Email:</strong> infoMyKitchen@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/BelaskriMoncef" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/Nabil.Baba.13/" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/_____moncef/?hl=fr" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <!--a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <!--li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li-->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            <!--li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li-->
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">

                        <h4>Our Newsletter</h4>
                        <p> <a href="#">Subscribe</a> to our newsletter and stay updated on the latest developments and special offers! Your newsletter preferences.</p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MyKitchen</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/MyKitchen-free-business-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">POWERISOWER</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetsVisiteur/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsVisiteur/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetsVisiteur/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assetsVisiteur/assets/vendor/php-email-form/validate.js"></script>
    <script src="assetsVisiteur/assets/vendor/purecounter/purecounter.js"></script>
    <script src="assetsVisiteur/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsVisiteur/assets/js/main.js"></script>

</body>

</html>