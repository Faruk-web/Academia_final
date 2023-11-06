<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Global</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front') }}/assets/images/academia/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front') }}/assets/images/academia/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front') }}/assets/images/academia/logo.png">
    <link rel="manifest" href="{{ asset('front') }}/assets/images/academia/logo.png">
    <meta name="description" content="aspro HTML 5 Template ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="../../css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="../../css2-1?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/aspro-icons/style.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/alagambe-font/stylesheet.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/vendors/twenty-twenty/twentytwenty.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/aspro.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/css/aspro-responsive.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{url('/')}}"><img style="height:70px;" src="{{ asset('front') }}/assets/images/academia/logo.png" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="{{url('/')}}">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/about-us')}}">About Us </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('academia.global')}}">Academia Global</a></li>
                                            <li><a href="{{route('academia')}}">Why Academia</a></li>
                                            <li><a href="{{route('studying.abroad')}}">Benefits of studying abroad</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services </a>
                                        <ul class="mega-submenu">
                                            <li class="mega-menu-item">
                                                <a href="{{ route('student.visa') }}" class="mega-menu-link">Student Visa</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="{{ route('comprehensive.counselling') }}">Comprehensive Counselling</a></li>
                                                    <li><a href="{{ route('application.process') }}">Application Process</a></li>
                                                    <li><a href="{{ route('program.selection') }}">Program Selection</a></li>
                                                    <li><a href="{{ route('scholarship.application') }}">Scholarship Application Assistance</a></li>
                                                    <li><a href="{{ route('student.visa') }}">Student Visa Application Guidance</a></li>
                                                    <li><a href="{{ route('departure.counselling') }}">Pre-Departure Counselling</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('visit.visa') }}">Visit Visa</a></li>
                                            <li><a href="{{ route('immigration') }}">Immigration</a></li>
                                            <li><a href="{{ route('provider') }}">Provider</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Study To Destinatons Migrate</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('top.courses') }}">Top Courses</a></li>
                                            <li><a href="{{ route('student.visa.extension') }}">Student Visa Extension</a></li>
                                            <li><a href="{{ route('visit.visa') }}"> Temporary Graduate Visa</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="">Destination</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ route('united.state') }}">United State</a></li>
                                            <li><a href="{{ route('study.australia') }}">Study in Australia</a></li>
                                            <li><a href="{{ route('canada') }}">CANADA</a></li>
                                            <li><a href="{{ route('united.kingdom') }}">United Kingdom</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('/contact-us')}}">Preparation Test </a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ url('/ielts') }}">IELTS</a></li>
                                            <li><a href="{{ url('/pte') }}">PTE</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('/contact-us')}}">Trending Now</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ route('blog') }}">Latest Blog</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('/contact-us')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-cart-box">
                                <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('body')

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="{{ url('/') }}"><img style="height:70px" src="{{ asset('front') }}/assets/images/academia/logo.png" alt=""></a>
                                </div>
                                <p class="footer-widget__Contact-text" style="color:#fff">The Most Eminent Visas and Immigration Consultant service provider in major metros and overseas with reliability since 1994. We are committed to provide reliable client support., promote independence and progression in a safe and non-discriminative environment for all our valued participants. </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Services</h3>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{url('/about-us')}}">About Us </a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{route('academia.global')}}">Academia Global</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;"href="{{route('academia')}}">Why Academia</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{route('studying.abroad')}}">Benefits of studying abroad</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('student.visa') }}">Student Visa</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('visit.visa') }}">Visit Visa</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('immigration') }}">Immigration</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('provider') }}">Provider</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Quick Links</h3>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('top.courses') }}">Top Courses</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;"href="{{ route('student.visa.extension') }}">Student Visa Extension</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;"href="{{ route('visit.visa') }}"> Temporary Graduate Visa</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('united.state') }}">United State</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('study.australia') }}">Study in Australia</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('canada') }}">CANADA</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{ route('united.kingdom') }}">United Kingdom</a></p>
                                        </div>
                                    </li>
                                    <li class="mt-3">
                                        <div class="icon" style="color:#155fee">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p><a style="color:#fff;margin-left: 6px;" href="{{url('/contact-us')}}"> Contact Us</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="contact-page__left">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact Us</h3>
                                    </div>
                                    <ul class="contact-page__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-help"></span>
                                            </div>
                                            <div class="content">
                                                <p>Call</p>
                                                <h4><a href="tel:+923076806860" style="color:#fff">01847050934</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-mailbox"></span>
                                            </div>
                                            <div class="content">
                                                <p>Email</p>
                                                <h4><a href="ask@academiaglobal.org" style="color:#fff">ask@academiaglobal.org</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-maps-and-flags"></span>
                                            </div>
                                            <div class="content" >
                                                <p>Location</p>
                                                <h4 style="color:#fff">Snowdrops, House# 78, Level - 4, Road# 11, Block# M, Banani, Dhaka, Bangladesh</h4>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="contact-page__social">
                                        <a target="_blank" href="https://www.facebook.com/academiaglobal.org?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
                                        <a target="_blank" href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2023 ResicareSA . All Rights Reserved by <a href="https://academiaglobal.org/"> AcademiaGLobal.org</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('front') }}/assets/images/resources/logo-1.png" width="40" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">ask@academiaglobal.org</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">01847050934</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="{{ asset('front') }}/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/odometer/odometer.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/swiper/swiper.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/wow/wow.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/isotope/isotope.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/countdown/countdown.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/vegas/vegas.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/timepicker/timePicker.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/twenty-twenty/twentytwenty.js"></script>
    <script src="{{ asset('front') }}/assets/vendors/twenty-twenty/jquery.event.move.js"></script>
    <script src="{{ asset('front') }}/assets/js/scriept.js"></script>



    <!-- template js -->
    <script src="{{ asset('front') }}/assets/js/aspro.js"></script>
</body>

</html>
