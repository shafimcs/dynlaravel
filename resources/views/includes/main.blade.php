<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Cleaning Service HTML5 Template">
        <meta name="author" content="ThemeEaster">

        <title>Cleanz | Cleaning Service HTML5 Template</title>

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="{{asset('user/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/elegant-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/slider.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/main.css')}}">

        <script src="{{asset('user/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body class="header-1">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- /.site-preloader-wrap -->

        <header class="header header-one">
            <div class="top-header-one top-bar">
                <div class="container">
                    <div class="top-bar-inner">
                        <div class="top-left">
                            <ul>
                                <li>Phone: +123 456 7890</li>
                                <li>Email: contact@email.com</li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul class="top-social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.top-bar -->
            <div class="primary-header-one primary-header">
                <div class="container">
                    <div class="primary-header-inner">
                        <div class="header-logo">
                            <a href="#">
                                <img src="public/uploads/{{ $logo->image}}" alt="Logo"/>
                            </a>
                        </div><!-- /.header-logo -->
                        <div class="header-menu-wrap">
                            <ul class="dl-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Company</a>
                                    <ul>
                                        <li><a href="{{route('home.about')}}">About Us</a></li>
                                    <li><a href="{{route('home.services')}}">Our Services</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Projects</a>
                                    <ul>
                                        <li><a href="{{route('home.project')}}">Project</a></li>
                                     <li><a href="{{route('home.projectdetails')}}">Project Details</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{route('home.pricingplan')}}">Pricing Plans</a></li>
                                        
                                 
                                <li><a href="">News</a>
                                    <ul>
                                        <li><a href="{{route('home.blog')}}">Blog</a></li>
                                       
                                        <li><a href="{{route('home.blogdetails')}}">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('home.contact')}}">Contact Us</a></li>
                            </ul>
                        </div><!-- /.header-menu-wrap -->
                        <div class="header-right">
                            <div class="search-icon dl-search-icon"><i class="ti-search"></i></div>
                            <a class="header-btn" href="#">Book A Cleaner<span></span></a>
                            <!-- Burger menu -->
                            <div class="mobile-menu-icon">
                                <div class="burger-menu">
                                    <div class="line-menu line-half first-line"></div>
                                    <div class="line-menu"></div>
                                    <div class="line-menu line-half last-line"></div>
                                </div>
                            </div>
                        </div><!-- /.header-right -->
                    </div><!-- /.primary-header-one-inner -->
                </div>
            </div><!-- /.primary-header-one -->
        </header><!-- /.header-one -->


   @yield('content')

        <footer class="footer-section">
            <div class="container">
                <div class="row padding">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <a class="logo" href="#"><img src="assets/img/logo.png" alt="logo"></a>
                            <p>Cleanz is well known and most trusted name in home cleaning service company in Bangladesh.</p>
                            <ul class="certified">
                                <li><img src="assets/img/certified-logo-1@2x.png" alt="img"></li>
                                <li><img src="assets/img/certified-logo-2@2x.png" alt="img"></li>
                                <li><img src="assets/img/certified-logo-3@2x.png" alt="img"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <h3>Headquarters</h3>
                            <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                            <p>Hello@ThemeEaster.net <br>(+123) 456 789 101</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <h3>Opening Hours</h3>
                            <p>Mon - Fri: 7am - 4pm <br>Weekend: 8am - 4pm</p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <h3>Subscribe Newsletter</h3>
                            <form action="#" class="subscribe-form">
                                <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                                <button type="submit" class="submit-btn"><i class="far fa-envelope"></i></button>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                            <p>Our online scheduling and payment system is safe.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="copyright">Powered By MCtree Creationssss</p>
                    </div>
                </div>
            </div>
        </footer><!-- /.footer-section -->

		<div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="ti-angle-up"></i></button>
        </div>

		<!-- jQuery Lib -->
		<script src="{{asset('user/js/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('user/js/popper.min.js')}}"></script>
		<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('user/js/waypoints.min.js')}}"></script>
		<script src="{{asset('user/js/slick.min.js')}}"></script>
        <script src="{{asset('user/js/headroom.min.js')}}"></script>
        <script src="{{asset('user/js/jquery.smoothscroll.min.js')}}"></script>
        <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('user/js/jquery.mb.YTPlayer.min.js')}}"></script>
		<script src="{{asset('user/js/odometer.min.js')}}"></script>
		<script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('user/js/simpleParallax.min.js')}}"></script>
		<script src="{{asset('user/js/wow.min.js')}}"></script>
		<script src="{{asset('user/js/contact.js')}}"></script>
        <script src="{{asset('user/js/appointment.js')}}"></script>
		<script src="{{asset('user/js/main.js')}}"></script>

    </body>
</html>