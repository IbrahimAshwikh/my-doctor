<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctors-Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/section-css/slidecss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/section-css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/my-doctor/public/mydoctor#">My Doctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="http://localhost/my-doctor/public/mydoctor#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Medical Quotes</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="http://localhost/my-doctor/public/mydoctor/contact-us" class="nav-link">Contact Us</a></li>
                     <li class="nav-item"><a class="nav-link dropdown-toggle " href="" id="navbardrop" data-toggle="dropdown">
                            city
                          </a>
                        <div class="dropdown-menu dropdown-menu-right"style="background: linear-gradient(#6caae9, transparent);">
                            <a class="dropdown-item" href="#">Tripole</a>
                            <a class="dropdown-item" href="#">Benghazi</a>
                            <a class="dropdown-item" href="#">Misurata</a>
                            <a class="dropdown-item" href="#">Zawya</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <div class="overlay"></div>
    <section class="specialist-area section-padding">
        <h2 style="text-align: center; padding-bottom: 60px; margin-top: 0px;">Best Doctors For <strong style="color: #007bff;">{{ $section->department }}</strong></h2>
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                @if( $section->id == $doctor->section)
                <div class="col-lg-3 col-sm-6 mb-5 text-center">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset(Storage::url($doctor->img)) }}" alt="Doctor Image" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>{{ $doctor->name }}</h3>
                                <h6>Hospital::{{ $doctor->hospital }}<br>Place::{{ $doctor->place }}<br>Phone::{{ $doctor->phone }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
               
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->


    <!-- footer -->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="font-size: 25px !important; margin-left: 120px;"><b>AboutUs</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="font-size: 25px !important; margin-left: 120px;"><b>MyDoctor</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li"><a href="http://localhost/my-doctor/public/mydoctor#"><i></i>Home</a></li>
                                <li class="li"><a href="#service"><i></i>Departments</a></li>
                                <li class="li"><a href="http://localhost/hyper_team/public/hyperteam"><i></i>About Us</a></li>
                                <li class="li"><a href="http://localhost/my-doctor/public/mydoctor/contact-us"><i></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white"style="font-size: 25px !important; margin-left: 90px;"><b>ContactUs</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="oo">Libya, Tripoli, Tec Camp</li>
                                <li class="oo">+218912345678</li>
                                <li class="oo">Hyper-Team@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        © Copyright Hyper Team. All Rights Reserved
                        <div class="credits">
                            Designed by::<a href="http://localhost/hyper_team/public/hyperteam">Hyper Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- footer end -->
    <script src="{{ asset('js/section-js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/section-js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/section-js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/section-js/jquery.easing.1.3.js') }}"></script>
    <!--سهم الي ينزل -->
    <script src="{{ asset('js/section-js/jquery.waypoints.min.js') }}"></script>
    <!--search-->
    <script src="{{ asset('js/section-js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/section-js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/section-js/aos.js') }}"></script>
    <script src="{{ asset('js/section-js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/section-js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/section-js/main.js') }}"></script>



</body>

</html>