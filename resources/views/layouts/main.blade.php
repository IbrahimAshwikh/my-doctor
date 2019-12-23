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
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="http://localhost/my-doctor/public/mydoctor/contact-us" class="nav-link">Contact Us</a></li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <ul>
                 <li class="dropdown-item"><a href="http://localhost/my-doctor/public/mydoctor/create-doctor">Add Doctor</a></li>
                <li class="dropdown-item"><a href="http://localhost/my-doctor/public/mydoctor/create-section">Add Department</a></li>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          </ul>
      @endguest                   

                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    
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
                                <li class="li" style="margin-left: 95px; color: white;"><a href="http://localhost/hyper_team/public/hyperteam" style="color: white;"><i></i>About Us</a></li>
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
                            Designed by::<a href="http://localhost/hyper_team/public/hyperteam">Hyper Team</a>
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