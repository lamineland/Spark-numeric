<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spark N @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('create/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('create/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('create/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('create/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('create/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('create/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('create/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('create/css/style.css') }}">

    
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
        <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">+221 77 337 34 52</a></span>
              <span><strong class="text-white">Email:</strong> <a href="#">aminesane18@gmail.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>

    @include('frontend.layouts.header')
    
    @yield('content')
  
    @include('frontend.layouts.footer')

  </div> <!-- .site-wrap -->

  <script src="{{ asset('create/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('create/js/popper.min.js') }}"></script>
  <script src="{{ asset('create/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('create/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('create/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('create/js/aos.js') }}"></script>
  <script src="{{ asset('create/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('create/js/jquery.sticky.js') }}"></script>

  <script src="{{ asset('create/js/typed.js') }}"></script>
  <script>
    var typed = new Typed('.typed-words', {
    strings: ["Web Apps"," WordPress"," Mobile Apps"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
    });
  </script>

  <script src="{{ asset('create/js/main.js') }}"></script>
  


  </body>
</html>