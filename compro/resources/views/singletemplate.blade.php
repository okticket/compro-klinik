<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Artikel - Liliput</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('images/favicon.icon') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="background-image navbar" style="background-image: url('img/navbar.jpg'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 50%" style="background-color: transparent;">
        <div class="container">
          <!--img src="{{ asset('images/logo liliput.png') }}" alt="logo" class="img-fluid col-md-2 col-xs-2 pr-0" style="height: 70px; width: 100px;"-->
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
          </button>

            @if(\Session::has('alert-success'))
              <div class="alert alert-success">
                <strong> Success </strong> {{Session::get('alert-success')}}
              </div>
            @endif
          
          <div class="collapse navbar-collapse" id="ftco-nav">
           <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="{{url('/'.'#home-section')}}" class="nav-link" style="color: #000000;"><span>Home</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#profil-section')}}" class="nav-link" style="color: #000000;"><span>Profil</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#programs-section')}}" class="nav-link" style="color: #000000;"><span>Terapi</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#blog-section')}}" class="nav-link" style="color: #000000;"><span>Artikel</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#contact-section')}}" class="nav-link" style="color: #000000;"><span>Kontak</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#go')}}" class="nav-link" style="color: #000000;"><span>Gallery</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#faq')}}" class="nav-link" style="color: #000000;"><span>FAQ</span></a></li>
            <a class="btn btn-primary px-4 py-3" href="{{ url('/log')}}">Login</a>
           </ul>
          </div>
        </div>
        </div>
      </nav>

         <!--  <div class="collapse navbar-collapse text-center" id="ftco-nav">
           <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="{{url('/'.'#home-section')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Home</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#profil-section')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Profil</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#programs-section')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Terapi</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#blog-section')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Artikel</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#contact-section')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Kontak</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#gallery')}}" class="nav-link" style="color: #00918e;"><span>Galeri</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#go')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>Gallery</span></a></li>
            <li class="nav-item"><a href="{{url('/'.'#questions_page')}}" class="nav-link" style="color: #000000;" data-toggle="collapse" data-target=".navbar-collapse.show"><span>FAQ</span></a></li>
           </ul>
          </div> -->

    @yield('isi')  

  <div class="footer-bottom" style="background: linear-gradient(45deg, #f6c89f, #fbe3b9);">
      <div class="container" >
        <div class="row">
          <div class="col-md-12 text-center pt-3">
            <p style="color: #000000;">SimplyDev - Copyright &copy;2019 Allright Reserved. Colorlib.</p>
          </div>
        </div>
      </div>
    </div> 

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> 

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>