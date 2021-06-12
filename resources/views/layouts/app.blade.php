<!DOCTYPE html>
<html lang="en">
<script src="{{ asset('js/app.js') }}"></script>
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
    @foreach($user as $u)
    <section id="topbar" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="http://www.gmail.com">{{$u->email}}</a>
                </i>
                <i class="bi bi-phone d-flex align-items-center ms-4">
                    <span>{{$u->num}}</span>
                </i>
            </div>
            <div class="social-links d-none d-md-flex">
                <a href="http://www.twitter.com" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="http://www.facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="http://www.instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="http://www.linkdein.com" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>
    @endforeach

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#">My<span>Kitchen</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <form action="{{ route('recetteV.search') }}" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text" name="search2" id="search2">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </form>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto " href="#RECIPES">RECIPES</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>

                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
                    <!-- <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul> -->
                    <!-- </li> -->
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @guest
                    <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
                    @else
                    @if(Auth::user()->type_compte == 'c')
                    
                    <li><a class="nav-link scrollto" href="{{route('profileC')}}">My space</a></li>
                    <li><a class="nav-link scrollto" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                        <form id="logout-form" action="{{ route('logout') }}"method="POST" style="display: none;">
                        @csrf
                        </form> 
                    </li>
                    
                    
                    @elseif(Auth::user()->type_compte == 'a')
                    <li><a class="nav-link scrollto" href="{{route('statistiques')}}">My space</a></li>
                    <li><a class="nav-link scrollto" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                        <form id="logout-form" action="{{ route('logout') }}"method="POST" style="display: none;">
                        @csrf
                        </form> 
                    </li>
                    @endif
                    
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide " data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url({{asset('assetsVisiteur/assets/img/slide/slide-1.png')}});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MyKitchen</span></h2>
                                <p class="animate__animated animate__fadeInUp">Always more inspiration in the kitchen with our easy, quick and trendy RECIPES.</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <!-- <div class="carousel-item" style="background-image: url(assets/img/slide/slide-1.png);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus
                                    et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- Slide 3 -->
                    <!-- <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                                <p class="animate__animated animate__adeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus
                                    et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
                </a> -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        @yield('content')

        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <span>About</span>
                    <h2>About</h2>
                    <p>read more about MyKitchen services and goals </p>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= About List Section ======= -->
        <section id="about-list" class="about-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bi bi-tag"></i>
                            <h4>Who Is MyKitchen ?</h4>
                            <p class="lead"> MyKitchen is brought to you by a diverse team of editors, writers, recipe developers, and photographers from across the country. Helping people make their homes more beautiful, organized and healthy by connecting them to a
                                wealth of resources, ideas and community online.
                            </p>
                            <br>
                        </div>
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bi bi-bookmark-star"></i>
                            <h4>Where Should I Start ?</h4>
                            <p class="lead">This is a site for people who like to get their hands dirty while they cook. It is for those who care about the quality of their food, and how it affects the health of themselves and the planet. It is for cooks who care about
                                design and want to create a beautiful kitchen. It’s a place to dive in deep, and embrace the joy of one of our basic needs: Food, cooked at home, nourishing ourselves and our households.
                            </p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-receipt"></i>
                            <h4>What We Believe</h4>
                            <p class="lead">A calm, healthy, beautiful home is a necessary foundation for happiness and success in the world. Creating this home doesn’t require large amounts of money or space. It requires inspiration, connection to resources and motivation
                                to do something about it. The basic elements of good home design can be learned and achieved by all. Simplicity and luxury are not mutually exclusive.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-check-circle"></i>
                            <h4>Our Goal</h4>
                            <p class="lead">To connect people to the resources they need to improve their homes, while reducing their reliance on stuff.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About List Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container position-relative">

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach($chef as $ce)
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assetsVisiteur/assets/img/testimonials/gordon-ramsay-kitchen-nightmares-amy-s-baking-company-chef-leadership-gordon-ramsay-a8f62a37fcb48fcd3fe052a968f25547.jpg" class="testimonial-img" alt="">
                                <h3>{{$ce->first_name}} {{$ce->last_name}}</h3>
                                <h4>Chef</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{$ce->email}}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    @endforeach
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
        <!-- ======= Hero Section ======= -->

        <!-- ======= RECIPES Section ======= -->
        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
            <div class="container position-relative">

                <div class="text-center title">
                    <h3>What we have achieved so far</h3>
                    <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p>
                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="" data-purecounter-end="" data-purecounter-duration="" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="" data-purecounter-end="" data-purecounter-duration="" class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="" data-purecounter-end="" data-purecounter-duration="" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Counts Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Team</span>
                    <h2>Team</h2>
                    <p>more information about teams work</p>
                </div>

                <div class="row">
                    @foreach($team as $te)
                    <div class="col-lg-12">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="" class="img-fluid" alt=""></div>
                            <center>
                                <div class="member-info">
                                    <h4>{{$te->first_name}} {{$te->last_name}}</h4>
                                    <span>UX/UI DESIGNER and DEV</span>
                                    <p>designer of user interfaces for machines and software</p>
                                    <div class="social">
                                        <a href="https://twitter.com/BelaskriMoncef"><i class="ri-twitter-fill"></i></a>
                                        <a href="https://web.facebook.com/moncef.smaili/"><i class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/_____moncef/?hl=fr"><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                           </center>
                        </div>
                    </div>
                    @endforeach

                    <!-- <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </section>
        <!-- End Team Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>Want to get in touch with Mykitchen? You’ve come to the right place! What do you need, and whom do you want to talk to?</p>
                </div>
            </div>

            <div class="map">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52357.77590335639!2d-1.3501794960338762!3d34.897389225950775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c9b8f6b4ef59%3A0x576b9d7ddfa0780!2sTlemcen%2C%20Alg%C3%A9rie!5e0!3m2!1sfr!2ses!4v1618177531794!5m2!1sfr!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26178.136327150238!2d-1.3352449563185553!3d34.899747472759415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c86360eebd11%3A0x439fe45c38348df0!2sNouveau%20P%C3%B4le%20Universitaire%20Abou%20Bakr%20Belkaid%20Tlemcen!5e0!3m2!1sfr!2ses!4v1618177607970!5m2!1sfr!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26178.136327150238!2d-1.3352449563185553!3d34.899747472759415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78c86360eebd11%3A0x439fe45c38348df0!2sNouveau%20P%C3%B4le%20Universitaire%20Abou%20Bakr%20Belkaid%20Tlemcen!5e0!3m2!1sfr!2ses!4v1618177607970!5m2!1sfr!2ses"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                @foreach($user as $u)
                <div class="info-wrap mt-5">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="ri-map-pin-line"></i>
                            <h4>Location:</h4>
                            <p>Universitaire Abou Bakr Belkaid Tlemcen<br>TLEMCEN, ALGERIA</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="ri-mail-line"></i>
                            
                                <h4>Email:</h4>
                                <p>{{$u->email}}</p>
                            
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="ri-phone-line"></i>
                            <h4>Call:</h4>
                            <p >{{$u->num}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <!--form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form-->

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @foreach($user as $u)
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>MyKitchen</h3>
                            <p>
                                Universitaire Abou Bakr Belkaid Tlemcen <br>TLEMCEN, ALGERIA<br><br>
                                <strong>Phone:</strong>{{$u->num}}<br>
                                <strong>Email:</strong> {{$u->email}}<br>
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
    @endforeach
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


































