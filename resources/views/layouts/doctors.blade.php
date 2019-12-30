<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus-css/contact-us.css') }}">
     <style>
          .input{
               margin-bottom: 10px;
          }
          .nav-link:hover{
               color: white !important;
          }
          .navbar-brand:hover{
              color: white !important;
          }
     </style>
    </head>

<body style="background: linear-gradient(#2f7cc9, transparent); background-repeat: no-repeat !important;">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page') }}">My Doctor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="{{ route('page') }}" class="nav-link">Home</a></li>
                    <li class="nav-item "><a href="{{ route('page') }}#department" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="{{ route('page') }}#Quotes" class="nav-link">Medical Quotes</a></li>
                    <li class="nav-item"><a href="http://localhost/hyper_team/public/hyperteam" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ route('contactus') }}" class="nav-link">Contact Us</a></li>
                    
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

              <div class="dropdown-menu dropdown-menu-right"style="background: linear-gradient(#6caae9, transparent); margin-left: 300px;">
              <ul style="margin-left: -40px;">
                 <li class="dropdown-item"><a href="{{ route('create-doctor') }}" style="color: black;">Add New Doctor+</a></li>
                <li class="dropdown-item"><a href="{{ route('create-section') }}" style="color: black;">Add New Department+</a></li>
                <li class="dropdown-item"><a href="{{ route('create-city') }}" style="color: black;">Add New City+</a></li>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                 </ul>
              </div>
          </li>
      @endguest 
                   
                </ul>
            </div>
        </div>
    </nav>
    @yield('cont')
    <!-- END nav -->
    <div style="margin-top:200px;"></div>

@yield('content')

   
        <!-- loader -->
    <script src="{{ asset('js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>



</body>
</html>