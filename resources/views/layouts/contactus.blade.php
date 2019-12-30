<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONTACT US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page') }}">My Doctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('page') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#department" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">Medical Quotes</a></li>
                    
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">About Us</a></li>
                    <li class="nav-item active"><a href="{{ route('contactus') }}" class="nav-link">Contact Us</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

       @yield('content')
       @yield('br')

     <!-- footer -->
       <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>AboutUs</b></h3>
                        </div>
                        <div class="info-sec">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>MyDoctor</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li"><a href="{{ route('page') }}"><i></i>Home</a></li>
                                <li class="li"><a href="{{ route('page') }}#department"><i></i>Departments</a></li>
                                <li class="li"><a href="http://localhost/hyper_team/public/hyperteam"><i></i>About Us</a></li>
                                <li class="li"><a href="{{ route('contactus') }}"><i></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white"style="margin-left: 100px;"><b>ContactUs</b></h3>
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



        <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>



</body>
</html>
