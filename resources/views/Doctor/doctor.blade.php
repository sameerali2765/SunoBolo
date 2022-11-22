@extends('layout')

@section('main')

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Doctor</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Doctor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

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
                            <h3><a href="{{ url ('doctor-detail')}}">Dr. Addison Smith</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Dr. Sarah Taylor</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Dr. Aiken Ward</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Babatunde Jon</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Eachann Jhon</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Daisy Gabriela</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Ronnie Aaron</a></h3>
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
                            <h3><a href="{{ url ('doctor-detail')}}">Edie Dee</a></h3>
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
@endsection