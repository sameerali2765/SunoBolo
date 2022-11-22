@extends('layout')

@section('main')
    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Services Details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Services Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Services Details Area -->
    <section class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="services-details-desc">
                        <div class="services-details-image">
                            <img src="{{ asset('assets/img/services/1.jpg')}}" alt="image">
                        </div>

                        <h3>Radiation Oncology</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>

                        <div class="services-details-features">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services-features-list">
                                        <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                                        <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                                        <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                                        <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services-features-list">
                                        <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                                        <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                                        <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                                        <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                        <h3>Professional Medical Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                        <ul class="wp-block-gallery columns-3">
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="{{ asset('assets/img/blog/9.jpg')}}" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="{{ asset('assets/img/blog/8.jpg')}}" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="{{ asset('assets/img/blog/7.jpg')}}" alt="image">
                                </figure>
                            </li>
                        </ul>

                        <h3>What are the Risks of Open-Heart Surgery?</h3>

                        <div class="services-details-features">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services-features-list">
                                        <li><i class="flaticon-check-mark"></i> Priority Medical</li>
                                        <li><i class="flaticon-check-mark"></i> Rent-a-Medic</li>
                                        <li><i class="flaticon-check-mark"></i> Lung or kidney failure</li>
                                        <li><i class="flaticon-check-mark"></i> Neurosurgery</li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services-features-list">
                                        <li><i class="flaticon-check-mark"></i> Bladder Cancer</li>
                                        <li><i class="flaticon-check-mark"></i> Breast Health</li>
                                        <li><i class="flaticon-check-mark"></i> Radiation Oncology</li>
                                        <li><i class="flaticon-check-mark"></i> Investigations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                        <h3>Investigations</h3>

                        <div class="chart-image">
                            <img src="assets/img/chart.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_services_list">
                            <h3 class="widget-title">More Services</h3>

                            <ul>
                                <li><a href="single-services.html" class="active">Cancer Services <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Liver Transplant <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Kidney Cancer <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Cardiac Arrhythmia <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Dental Services <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Neurology Care <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                                <li><a href="single-services.html">Respite Care <i class="flaticon-arrow-pointing-to-right"></i></a></li>
                            </ul>
                        </section>

                        <section class="widget widget_download">
                            <h3 class="widget-title">Download</h3>
                            
                            <ul>
                                <li><a href="#">Our Brochure Pdf <i class="far fa-file-pdf"></i></a></li>
                                <li><a href="#">Our Iso Certificate <i class="far fa-file-alt"></i></a></li>
                                <li><a href="#">Great Technology <i class="far fa-file-alt"></i></a></li>
                            </ul>
                        </section>

                        <section class="widget widget_appointment">
                            <h3 class="widget-title">Get Some Advice?</h3>
                            
                            <form class="appointment-form">
                                <div class="form-group">
                                    <div class="icon">
                                        <i class="flaticon-user"></i>
                                    </div>
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name">
                                </div>

                                <div class="form-group">
                                    <div class="icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                    <label>Your Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email Address" id="email" name="email">
                                </div>

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

                                <button class="btn btn-primary">Make Appointment <i class="flaticon-right-chevron"></i></button>
                            </form>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->

@endsection