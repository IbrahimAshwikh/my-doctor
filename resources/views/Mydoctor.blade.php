<!DOCTYPE html>
<html lang="en">

<head>
    <title>MY DOCTOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                    <li class="nav-item"><a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
                            city
                          </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Tripole</a>
                            <a class="dropdown-item" href="#">Benghazi</a>
                            <a class="dropdown-item" href="#">Misurata</a>
                            <a class="dropdown-item" href="#">Zawya</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="../ourteam/team.php" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="http://localhost/my-doctor/public/mydoctor/contact-us" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <div class="hero-wrap ftco-degree-bg" style="background-image: url('img/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <h1 class="mb-4">Find your doctor<br></h1><h1>We are here for you</h1>
                        <!-- <p style="font-size: 18px;"></p> -->
                        <form action="#" class="search-location mt-md-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="text" class="form-control" placeholder="Search here....">
                                            <button><span class="ion-ios-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel" style="margin: 2px auto 0; font-size: 30px;"><span class="ion-ios-arrow-down"></span></div>
            </a>
        </div>
    </div>

    <!-- slide start-->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-0 element-animate">
                <div class="col-md-8 text-center mb-2">
                    <h2 class="text-uppercase heading border-bottom mb-4"><b>DEPARTMENTS</b></h2>
                    <p class="mb-0 lead">We hope you get well as soon as possible</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-2 owl-carousel">
                    
                @foreach($departments as $department)
                    <div>
                        <div class="media d-block media-custom text-left">
                            <a href="http://localhost/my-doctor/public/mydoctor/section/{{ $department->id }}"><img src="{{ asset(Storage::url($department->img)) }}" alt="Image Placeholder" class="img-fluid"></a>
                            <div class="media-body">

                                <h3 class="mt-0 text-black"><a href="http://localhost/my-doctor/public/mydoctor/section/{{ $department->id }}" class="text-black">{{ $department->department }}<br> Department</a></h3>
                                <p>Specialized Hospitals &amp; Doctors .</p>
                                <p class="clearfix">
                                    <a href="http://localhost/my-doctor/public/mydoctor/section/{{ $department->id }}" class="float-left">Read more</a>

                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                   
                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>


 
    <!-- slide end-->
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(img/bbgg.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">Medical Quotes</h2>
                        <ul>
                            <li>"Sometimes the remedy is worse then the disease." <br><strong style="margin-left: 300px;">Francis Bacon</strong></br>
                            </li>
                            <li>"When the heart is at ease, the body is healthy." <br><strong style="margin-left: 300px;">Chinese</strong></br>
                            </li>
                            <li>"To keep the body in good health is a duty... otherwise we shall not be able to keep our mind strong and clear." <br><strong style="margin-left: 130px;">Buddha</strong></br>
                            </li>
                            <li>"Good health is not something we can buy. However, it can be an extremely valuable savings account." <br><strong style="margin-left: 50px;">Anne Wilson Schaef</strong></br>
                            </li>
                            <li>"Good health and good sense are two of life's greatest blessings."<br><strong style="margin-left: 400px;">Publilius Syrus</strong></br>
                            </li>
                            <li>"Happiness is nothing more than good health and abad memory." <br><strong style="margin-left: 390px;">Albert Schweitzer</strong></br>
                            </li>
                            <li>"The foundation of success in life is good health, it is also the basis of happiness." <br><strong style="margin-left: 450px;">P.T.Barnum</strong></br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>


    <!-- footer -->
    <footer id="footer" style="background: linear-gradient(#2f7cc9, transparent);">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>AboutUs</b></h3>
                        </div>
                        <div class="info-sec" style="color: white;">
                            <p>MY DOCTOR website has created & designed by "Hyper Team" web developers to assist patients to obtain best/topspecialized doctors in every Libyan city through the website.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white" style="margin-left: 120px;"><b>MyDoctor</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li class="li" style="margin-left: 95px; color: white;"><a href="http://localhost/my-doctor/public/mydoctor#" style="color: white;"><i></i>Home</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="#service" style="color: white;"><i></i>Departments</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="../ourteam/team.php" style="color: white;"><i></i>About Us</a></li>
                                <li class="li" style="margin-left: 95px; color: white;"><a href="http://localhost/my-doctor/public/mydoctor/contact-us" style="color: white;"><i></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 marb20">
                        <div class="ftr-tle">
                            <h3 class="white"style="margin-left: 100px;"><b>ContactUs</b></h3>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                                <li class="oo" style="margin-left: 75px; color: white;">Libya, Tripoli, Tec Camp</li>
                                <li class="oo" style="margin-left: 75px; color: white;">+218912345678</li>
                                <li class="oo" style="margin-left: 75px; color: white;">Hyper-Team@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" style="color: black;">
                        © Copyright Hyper Team. All Rights Reserved
                        <div class="credits">
                            Designed by::<a href="../ourteam/team.php">Hyper Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('js/js/owl.carousel.min.js') }}"></script>
   
    <script src="{{ asset('js/js/main.js') }}"></script>


    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--سهم الي ينزل -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!--search-->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <!--footer-->
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>