@extends('layout')

@section('main')
   <!-- Start Page Title Area -->
   <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Doctor Details</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Dr. Addison Smith</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Doctor Details Area -->
<section class="doctor-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="doctor-details-image">
                    <img src="{{ asset('assets/img/doctor/2.jpg')}}" alt="image">

                    <h3>Dr. Addison Smith</h3>
                    <span>Cardiologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="doctor-details-desc">
                    <h2>Hello i’m Dr. Addison Smith Introducing My Self.</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duisaute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>

                    <div class="signature-image">
                        <img src="{{ asset('assets/img/signature.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="skill-education-desc">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="skill-desc">
                        <span class="sub-title">My Skills</span>
                        <h2>I Have Explained about Myself A bit</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <ul>
                            <li><span><i class="flaticon-check-mark"></i> Cancer Services</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Liver Transplant</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Kidney Cancer</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Cardiac Arrhythmia</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Dental Services</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Radiation Oncology</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Kidney Stone Center</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Male Urology Services</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Heart Transplant</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Pediatric Liver Transplant</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Pediatric Heart Transplant</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Pancreas Transplant</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="education-desc">
                        <span class="sub-title">My Education</span>
                        <h2>Here is my 33 Years Qualifications</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-doctor"></i>
                                </div>
                                <span>Master Of Science</span>

                                Oxford Univercity (2011 - 2014)
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-newborn"></i>
                                </div>
                                <span>Neurology Test</span>

                                Stanford Versity (2015 - 2018)
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-laboratory"></i>
                                </div>
                                <span>Master Of Medicine</span>

                                Stanford Versity (2015 - 2018)
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="flaticon-extraction"></i>
                                </div>
                                <span>Orthopedics</span>

                                Oxford Univercity (2011 - 2014)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="{{ asset('assets/img/shape/3.png')}}" class="wow fadeInLeft" alt="image"></div>
</section>
<!-- End Doctor Details Area -->

<!-- Start Appointment Area -->
<section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="appointment-content">
            <span class="sub-title">Get Some Advice?</span>
            <h2>Make An Appointment</h2>

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
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <label>Your Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Your Phone" id="text" name="text">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <label>Select Date</label>
                            <input type="text" class="form-control" placeholder="mm/dd/yy" id="text" name="text">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <label>Add Time</label>
                            <input type="text" class="form-control" placeholder="15.00AM" id="text" name="text">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
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

    
@endsection