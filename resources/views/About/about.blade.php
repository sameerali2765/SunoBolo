@extends('layout')

@section('main')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-image">
                        <img src="{{ asset('assets/img/about-img1.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>Short Story About Fovia Clinic Since 1999</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <ul>
                            <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                            <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                            <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                            <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                            <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                            <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Our Vision Area -->
    <section class="our-vision-area ptb-100 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="flaticon-check-mark"></i>
                        </div>

                        <h3>Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="flaticon-check-mark"></i>
                        </div>

                        <h3>Our Planning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-vision-box">
                        <div class="icon">
                            <i class="flaticon-check-mark"></i>
                        </div>

                        <h3>Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Vision Area -->

    <!-- Start Our Mission Area -->
    <section class="our-mission-area ptb-100 pt-0">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="our-mission-content">
                        <span class="sub-title">Our Mission & Vision</span>
                        <h2>Better Information, Better Health</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-doctor"></i>
                                </div>
                                <span>Professional Staff</span>

                                Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-newborn"></i>
                                </div>
                                <span>Newborn Care</span>

                                Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-laboratory"></i>
                                </div>
                                <span>Sufficient Lab Tests</span>

                                Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-extraction"></i>
                                </div>
                                <span>Tooth Extraction</span>

                                Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="our-mission-image">
                        <img src="{{ asset('assets/img/mission-img1.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape3"><img src="{{ asset('assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
    </section>
    <!-- End Our Mission Area -->

    <!-- Start Appointment Area -->
    <section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="appointment-content">
                <span class="sub-title">Book Appointment</span>
                <h2>We are here for you</h2>

                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-user"></i>
                                </div>
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-envelope"></i>
                                </div>
                                <label>Your Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address" id="email" name="email">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <label>Select Your Services</label>

                                <select>
                                    <option>Cardiology</option>
                                    <option>Urologic Oncology</option>
                                    <option>Neurology</option>
                                    <option>Medicine</option>
                                    <option>Surgery</option>
                                    <option>Urology</option>
                                    <option>Radiology</option>
                                    <option>Neurosurgery</option>
                                    <option>Bariatric Surgery</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <label>Your Phone</label>
                                <input type="text" class="form-control" placeholder="Enter Your Phone" id="text" name="text">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="submit-btn">
                                <button class="btn btn-primary">Make Appointment <i class="flaticon-right-chevron"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Appointment Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="single-fun-facts">
                        <div class="icon">
                            <i class="flaticon-doctor-1"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="540"></span>
                            <span class="optional-icon">+</span>
                        </h3>
                        <p>Expert Doctors</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="single-fun-facts">
                        <div class="icon">
                            <i class="flaticon-light-bulb"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="899"></span>
                            <span class="optional-icon">K</span>
                        </h3>
                        <p>Problem Solve</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="single-fun-facts">
                        <div class="icon">
                            <i class="flaticon-science"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="100"></span>
                            <span class="optional-icon">+</span>
                        </h3>
                        <p>Award Winning</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="single-fun-facts">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <h3>
                            <span class="odometer" data-count="56"></span>
                            <span class="optional-icon">K</span>
                        </h3>
                        <p>Experiences</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Doctor Area -->
    <section class="doctor-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Doctors</span>
                <h2>Meet Our Qualified Doctors</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/1.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Dr. Addison Smith</a></h3>
                            <span>Cardiologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/5.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Dr. Sarah Taylor</a></h3>
                            <span>Nephrologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/2.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Dr. Aiken Ward</a></h3>
                            <span>Dermatologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/3.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Babatunde Jon</a></h3>
                            <span>Endocrinologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/4.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Eachann Jhon</a></h3>
                            <span>Gastroenterologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/6.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Daisy Gabriela</a></h3>
                            <span>Endocrinologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/7.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Ronnie Aaron</a></h3>
                            <span>Dermatologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-doctor-box">
                        <div class="doctor-image">
                            <img src="{{ asset('assets/img/doctor/8.jpg')}}" alt="image">

                            <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>

                        <div class="doctor-content">
                            <h3><a href="#">Edie Dee</a></h3>
                            <span>Cardiologists</span>

                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape3"><img src="{{ asset('assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
    </section>
    <!-- End Doctor Area -->

    <!-- Start Our Approach Area -->
    <section class="our-approach-area ptb-100 pt-0">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="approach-content">
                        <span class="sub-title">Our Approach</span>
                        <h2>High Quality Health Care Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <ul>
                            <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                            <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                            <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                            <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                        </ul>

                        <a href="#" class="btn btn-primary">Make Appointment <i class="flaticon-right-chevron"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="approach-image">
                        <img src="{{ asset('assets/img/approach-img1.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Approach Area -->

    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-100 pt-0">
        <div class="container">
            <div class="section-title">
                <span>Feedback</span>
                <h2>Our Happy Clients Says About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="feedback-slides">
                <div class="client-thumbnails">
                    <div>
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/1.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/2.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/3.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/4.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/5.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/1.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/2.jpg')}}" alt="client"></div>
                        </div>
                        
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('assets/img/client-image/3.jpg')}}" alt="client"></div>
                        </div>
                    </div>
                </div>

                <div class="client-feedback">
                    <div>
                        <div class="item">
                            <div class="single-feedback">
                                <h3>John Lucy</h3>
                                <span>Founding Partner</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>John Smith</h3>
                                <span>Web Developer</span>
                                <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>Maxwel Warner</h3>
                                <span>Web Designer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>Ross Taylor</h3>
                                <span>Patient</span>
                                <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>James Anderson</h3>
                                <span>CEO</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>Steven Smith</h3>
                                <span>Manager</span>
                                <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>Steven Lucy</h3>
                                <span>Patient</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="single-feedback">
                                <h3>John Terry</h3>
                                <span>Patient</span>
                                <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="prev-arrow slick-arrow">
                        <i class='flaticon-left-arrow'></i>
                    </button>
                    
                    <button class="next-arrow slick-arrow">
                        <i class='flaticon-arrow-pointing-to-right'></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="shape3"><img src="{{ asset('assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
    </section>
    <!-- End Feedback Area -->

    <!-- Start Partner Area -->
    <section class="partner-area ptb-100 bg-f4f9fd">
        <div class="container">
            <div class="section-title">
                <h2>Featured Customers & Partners</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="customers-partner-list">
                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/1.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/2.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/3.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/4.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/5.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/6.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/7.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/8.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('assets/img/partner/9.png')}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner Area -->

@endsection