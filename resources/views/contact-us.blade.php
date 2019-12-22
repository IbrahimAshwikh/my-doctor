<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONTACT US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/css/animate.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/css/slide.css') }}"> -->
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/contactus-css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
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
                    <li class="nav-item"><a href="http://localhost/my-doctor/public/mydoctor#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Medical Quotes</a></li>
                    
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">About Us</a></li>
                    <li class="nav-item active"><a href="http://localhost/my-doctor/public/mydoctor/contact-us" class="nav-link">Contact Us</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('img/bg.jpg') }}') ;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
         <form action="  {{ url('/contact-us') }} " method="post">
           @csrf
            <div class="containerr">
                 <h1>CONTACT US</h1>
                <div class="login">
                      <input type="text" name="name" placeholder="Your Name" class="input">
                      <input type="text" name="Email" placeholder="Your Email" class="input">
                </div>

                <div class="supject">
                         <input type="text"name="Subject" placeholder="Subject" class="input">
                </div>

                <div class="msg">
                        <textarea class="area"name="Message" placeholder="Leave a Message"></textarea>
                </div>

                <!-- <div class="submit">
                       <a href="#" class="btn">Send Message</a>
                </div> -->
                <input type="submit" class="mouse-icon" value="Send">
                </form>
            </div>
        </div>
        <!-- <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel" style="margin: 2px auto 10px 11px; font-size: 23px;"><span>Send</span></div>
            </a>
            
        </div> -->
    </div>



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
                                <li class="li"><a href="http://localhost/my-doctor/public/mydoctor#"><i></i>Home</a></li>
                                <li class="li"><a href="#service"><i></i>Departments</a></li>
                                <li class="li"><a href="http://localhost/hyper_team/public/hyperteam"><i></i>About Us</a></li>
                                <li class="li"><a href="http://localhost/my-doctor/public/mydoctor/contact-us"><i></i>Contact Us</a></li>
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
    <!-- <script src="{{ asset('js/js/popper.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/bootstrap.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/owl.carousel.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/bootstrap-datepicker.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/jquery.timepicker.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/jquery.waypoints.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/js/main.js') }}"></script> -->


    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> -->
    <!--سهم الي ينزل -->
    <!-- <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script> -->
    <!--search-->
    <!-- <script src="{{ asset('js/jquery.stellar.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/aos.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/scrollax.min.js') }}"></script> -->
    <!--footer-->
    <!-- <script src="{{ asset('js/main.js') }}"></script> -->


</body>
</html>