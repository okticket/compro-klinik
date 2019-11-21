<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Klinik Liliput Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Newfolder/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <script src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup.min.js')}}"></script>

    <link src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
    <script type="text/javascript">
      $(document).ready(function(){
        $('.input-tanggal').datepicker();   
      });
    </script>
  
  </head>
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <img src="{{ asset('images/logo liliput.png') }}" alt="logo" class="img-fluid col-md-2 pr-0">
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
	        <li class="nav-item"><a href="#home-section" class="nav-link" style="color: #ff8ba7;"><span>Home</span></a></li>
	        <li class="nav-item"><a href="#profil-section" class="nav-link" style="color: #ff8ba7;"><span>Profil</span></a></li>
	        <li class="nav-item"><a href="#programs-section" class="nav-link" style="color: #ff8ba7;"><span>Terapi</span></a></li>
	        <li class="nav-item"><a href="#blog-section" class="nav-link" style="color: #ff8ba7;"><span>Artikel</span></a></li>
	        <li class="nav-item"><a href="#contact-section" class="nav-link" style="color: #ff8ba7;"><span>Kontak</span></a></li>
          <!--<li class="nav-item"><a href="#gallery" class="nav-link" style="color: #00918e;"><span>Galeri</span></a></li>-->
          <li class="nav-item"><a href="#go" class="nav-link" style="color: #ff8ba7;"><span>Gallery</span></a></li>
          <li class="nav-item"><a href="#questions_page" class="nav-link" style="color: #ff8ba7;"><span>FAQ</span></a></li>
          <a class="btn btn-primary px-4 py-3" href="{{ url('/log')}}">Login</a>
	       </ul>
	      </div>
	    </div>
	  </nav>

    <section id="home-section" class="hero">
        <div class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <img src="{{ asset('img/4.jpg') }}" class="img-fluid vh-100" alt="">
                </div>
            </div>
        </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <img src="{{ asset('img/banner1.jpg') }}" class="img-fluid vh-100" alt="">
	          </div>
	        </div>
	      </div>

        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <img src="{{ asset('img/banners.jpg') }}" class="img-fluid vh-100" alt="">
            </div>
              <div class="carousel-caption">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <h2>Berminat Terapi di Klinik Liliput?</h2>
                </div>
                <div class="wow fadeInUp pl-md-2" data-wow-offset="0" data-wow-delay="0.3s">
                    <form class="align-items-center">
                        <a class="btn btn-primary px-4 py-3" href="{{ url('/reg')}}">Register</a>
                    </form>
                </div>
              </div>
          </div>
        </div>
    </section>

    @yield('isi')  

    <footer class="ftco-footer ftco-section" id="tentangg">
      <div class="container">
        <div class="row mb-1">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang Kami</a></span></h2>
              <p>Klinik Liliput adalah sebuah tempat terapi bagi anak-anak yang mempunyai kebutuhan khusus seperti Autisme, Asperger’s Syndrom, Down Syndrom, Cerebral Palsy, Keterlambatan Perkembangan Psikomotor, Problem belajar dan kesulitan belajar, dan lain – lain.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Waktu Pelayanan Kami</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="text">Reguler<br>
                      Hari Senin – Jumat,  jam 08.00–17.00 WIB<br>
                      Hari Sabtu,  jam 08.00–12.00 WIB
                    </span>
                  </li>
                  <br>
                  <li>
                    <span class="text">Melalui Appointment<br>
                      Hari Sabtu,  jam 12.00–17.00 WIB
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Kontak Kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Cipete IV No.6, RT.2/RW.4, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(62-21) 7581 6662</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">liliputklinik@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 

    <!--<div class="footer-bottom" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">-->
      <div class="footer-bottom" style="background: linear-gradient(45deg, #ff8ba7, #ffc6c7);">
      <div class="container" >
        <div class="row">
          <div class="col-md-12 text-center pt-3">
            <p style="color: white;">SimplyDev - Copyright &copy;2019 Allright Reserved. Colorlib.</p>
          </div>
        </div>
      </div>
    </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  
  <script src="{{ asset('js/main.js')}}"></script>
    
  <!--Vendor-JS-->
    <script src="{{ asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/contact-form.js')}}"></script>
    <script src="{{ asset('js/ajaxchimp.js')}}"></script>
    <script src="{{ asset('js/scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>

    <script type="text/javascript">
    $('.carousel').carousel({
      interval: 2000
    })
    </script>
  </body>
</html>