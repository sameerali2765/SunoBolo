@extends('layout')

@section('main')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Our Services</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Services</li>
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
                        <span>Health Care Facility</span>
                        <h2>Our Healthcare Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Main Services Area -->
    <section class="main-services-area ptb-100 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-cancer"></i>
                        </div>
                        <h3><a href="{{ url ('service-detail')}}">Cancer Services</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-liver"></i>
                        </div>
                        <h3><a href="{{ url ('service-detail')}}">Liver Transplant</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-kidney"></i>
                        </div>
                        <h3><a href="#">Kidney Cancer</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-ekg"></i>
                        </div>
                        <h3><a href="{{ url ('service-detail')}}">Cardiac Arrhythmia</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <h3><a href="#">Advanced Care</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-dental-chair"></i>
                        </div>
                        <h3><a href="{{ url ('service-detail')}}">Internal Medicine</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-care"></i>
                        </div>
                        <h3><a href="#">Otolaryngology</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="main-services-box">
                        <div class="icon">
                            <i class="flaticon-brain"></i>
                        </div>
                        <h3><a href="{{ url ('service-detail')}}">Ophthalmology</a></h3>
                        <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Services Area -->

@endsection