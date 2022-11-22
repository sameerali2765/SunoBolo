<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/fovia/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 18:15:35 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <!-- Animation Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <!-- Slick Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
		<!-- Odometer Min CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
        <!-- FlatIcon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

        <title>Fovia - Medical Doctor & Healthcare Clinic HTML Template</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Header Area -->
        <header class="header-area">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <ul class="header-contact-info">
                                <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 19:00</li>
                                <li><i class="fas fa-phone"></i> Call Us: <a href="#">+07 554 332 322</a></li>
                                <li><i class="far fa-paper-plane"></i> <a href="#"><span class="__cf_email__" data-cfemail="3f5a525e56535a475e524f535a7f4a4d515e525a115c5052">[email&#160;protected]</span></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4">
                            <div class="header-right-content">
                                <ul class="top-header-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>

                                <div class="lang-select">
                                    <select>
                                        <option>Eng</option>
                                        <option>Spa</option>
                                        <option>Ara</option>
                                        <option>Fre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="fovia-responsive-nav">
                    <div class="container">
                        <div class="fovia-responsive-menu">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="fovia-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/img/logo.png')}}" alt="logo">
                            </a>
    
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{ url ('/')}}" class="{{ Request::is('/') ? 'nav-link active' : '' }}">Home</a></li>
                                    
                                    <li class="nav-item"><a href="{{ url ('service')}}" class="{{ Request::is('service') ? 'nav-link active' : '' }}">Services <i class="fas fa-plus"></i></a>
                                        {{-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="services-1.html" class="nav-link">Department 01</a></li>

                                            <li class="nav-item"><a href="services-2.html" class="nav-link">Department 02</a></li>

                                            <li class="nav-item"><a href="single-services.html" class="nav-link">Department Details</a></li>
                                        </ul> --}}
                                    </li>

                                    <li class="nav-item"><a href="{{ url ('doctor')}}" class="{{ Request::is('doctor') ? 'nav-link active' : '' }}">Doctors <i class="fas fa-plus"></i></a>
                                        {{-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>

                                            <li class="nav-item"><a href="doctor-details.html" class="nav-link">Doctor Details</a></li>
                                        </ul> --}}
                                    </li>
    
                                    <li class="nav-item"><a href="{{ url ('product')}}" class="{{ Request::is('product') ? 'nav-link active' : '' }}">Our Products <i class="fas fa-plus"></i></a>
                                        {{-- <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="shop.html" class="nav-link">Shop</a></li>
    
                                            <li class="nav-item"><a href="single-product.html" class="nav-link">Single Products</a></li>
    
                                            <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
    
                                            <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                        </ul> --}}
                                    </li>
    
                                    <li class="nav-item"><a href="#" class="nav-link">Blog <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog-1.html" class="nav-link">Blog Grid</a></li>
    
                                            <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Right Sidebar</a></li>
    
                                            <li class="nav-item"><a href="single-blog.html" class="nav-link">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-plus"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="about.html" class="{{ Request::is('about') ? 'nav-link active' : '' }}">About</a></li>

                                            <li class="nav-item"><a href="appointment.html" class="nav-link">Appointment</a></li>

                                            <li class="nav-item"><a href="timetable.html" class="nav-link">Time Table</a></li>

                                            <li class="nav-item"><a href="partner.html" class="nav-link">Partner</a></li>
    
                                            <li class="nav-item"><a href="error-404.html" class="nav-link">404 Error</a></li>
        
                                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                        </ul>
                                    </li>
        
                                    <li class="nav-item"><a href="{{ url ('about')}}" class="{{ Request::is('about') ? 'nav-link active' : '' }}">About Us</a></li>
                                </ul>
    
                                <div class="others-options">
                                    <a href="cart.html" class="cart-btn"><i class="flaticon-shopping-bag"></i></a>
    
                                    <div class="option-item"><i class="search-btn fas fa-search"></i>
                                        <i class="search-close-btn fas fa-times"></i>
                                        
                                        <div class="search-overlay search-popup">
                                            <div class='search-box'>
                                                <form class="search-form">
                                                    <input class="search-input" name="search" placeholder="Search" type="text">
    
                                                    <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
    
                                    <a href="{{ url ('contact')}}" class="btn btn-primary">Contact Us</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->
      
        @yield('main')    

        <!-- Start Footer Area -->
        <section class="footer-area">
            <div class="container">
                <div class="subscribe-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="newsletter-content">
                                <h2>Join Our Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

                                <button type="submit">Subscribe <i class="fas fa-paper-plane"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('assets/img/white-logo.png')}}" alt="image"></a>
                                <p>Powerfully flexible html template for medical & health related organizations, institutes, clinics and businesses.</p>
                            </div>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Departments</h3>

                            <ul class="departments-list">
                                <li><a href="#">Surgery and Radiology</a></li>
                                <li><a href="#">Departments</a></li>
                                <li><a href="#">Family</a></li>
                                <li><a href="#">Our Doctors</a></li>
                                <li><a href="#">Woman's Health</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Links</h3>

                            <ul class="links-list">
                                <li><a href="#">Optician</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Pediatrics</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Dermatology</a></li>
                                <li><a href="#">Doctors</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Opening Hours</h3>

                            <ul class="opening-hours">
                                <li>Mon - Tues <span>9.00AM - 17.00PM</span></li>
                                <li>Wednesday <span>9.00AM - 17.00PM</span></li>
                                <li>Thursday <span>9.00AM - 17.00PM</span></li>
                                <li>Friday <span>9.00AM - 17.00PM</span></li>
                                <li>Saturday <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <p>Copyright <i class="far fa-copyright"></i> 2021 Fovia. Design & Developed by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-chevron-up"></i></div>
        
        <!-- jQuery Min JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick Min JS -->
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <!-- Mean Menu JS -->
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
		<!-- Appear Min JS -->
		<script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
		<!-- Odometer Min JS -->
        <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <!-- Parallax Min JS -->
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!-- WOW Min JS -->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/fovia/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 18:16:03 GMT -->
</html>