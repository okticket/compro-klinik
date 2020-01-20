<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    
	<title>Klinik Liliput Official</title>
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/fonts/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/open-iconic-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
</head>
<body>

	<nav class="navbar navbar-expand-lg ftco_navbar bg-dark ftco-navbar-light transparent navbar-inverse" id="ftco-navbar">
	    <div class="container">
			<button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="oi oi-menu peach-menu"></span> KLINIK LILIPUT
	      	</button>
	      	<div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto">
		          	<li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
		          	<li class="nav-item"><a href="#profil" class="nav-link">Profil</a></li>
		          	<!-- <li class="nav-item"><a href="#visimisi" class="nav-link">Visi Misi</a></li> -->
		          	<li class="nav-item"><a href="#terapi" class="nav-link">Terapi</a></li>
		          	<li class="nav-item"><a href="#ahli" class="nav-link">Ahli</a></li>
		          	<li class="nav-item"><a href="#artikel" class="nav-link">Artikel</a></li>
		          	<li class="nav-item"><a href="#questions_page" class="nav-link">FAQ</a></li>
		          	<li class="nav-item"><a href="#galeri" class="nav-link">Galeri</a></li>
		          	<li class="nav-item"><a href="#alamat" class="nav-link">Kontak</a></li>
		        </ul>
	      	</div>

	      	@if (Session::get('login') == TRUE)
	      		<a class="navbar-brand btn peach-btn rounded-pill px-lg-5 px-md-5 order-lg-last order-md-first order-sm-last" href="{{ url('/logout') }}">Logout</a>
	      	@else
	      		<a class="navbar-brand btn peach-btn rounded-pill px-lg-5 px-md-5 order-lg-last order-md-first order-sm-last" href="{{ url('/login') }}">Login</a>
      		@endif	

	    </div>
	</nav>
    <!-- END nav -->
    
    <div class="hero-wrap container-fluid bannerindex_liliput" id="home">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center pt-lg-5 pt-xl-5 pt-xs-4 pt-xl-4 mb-5 pb-5">
          <div class="offset-lg-7 offset-xl-7 col-lg-5 col-xl-5 col-md-6 ftco-animate pt-lg-5 pt-xl-5 pt-xs-4 pt-xl-4 bg-gradient">
        	<div class="col-md-12">
	          	<div class="text text-center mt-3 pt-4 pb-lg-5 pt-xs-4 pt-xl-4">
		            <h1 class="mb-2 text-uppercase text-white" style="font-family:'Penguin Attack';font-weight:normal;font-size:5vw;">Klinik Liliput</h1>
		            <p class="text-white text-capitalize motto">helping hands in your child's development</p>
		            @if (Session::has('alert'))
			          <div class="alert alert-danger text-center">
			            <strong> Warning! </strong> {{Session::get('alert')}}
			          </div>
			        @endif
			        @if(Session::has('alert-success'))
			            <div class="alert alert-success">
			              <strong> Success </strong> {{Session::get('alert-success')}}
			            </div>
			        @endif
	            </div>
        	</div>
        	<div class="col-md-12 pt-lg-5 pt-xl-5 mt-5 jarak">
	          	<div class="text text-center pt-lg-5 pt-xl-5 mb-5 pb-5">
	          		@if (Session::get('login') == FALSE)
	          			<div class="col-lg-12 col-xl-12 pb-3 pb-xs-3">
	          				<a href="{{ url('/daftar') }}" class="btn btn-warning px-lg-5 py-lg-3 font-weight-bold">DAFTAR SEKARANG</a>
	          			</div>
	          		@elseif (Session::get('login') == TRUE)
	          		<div class="row col-md-12">
	          			<div class="col-lg-6 col-xl-6 pb-3 pb-xs-3">
	          				<a href="#terapi" class="btn btn-warning px-lg-5 py-lg-3 font-weight-bold">Download Kuisioner</a>
	          			</div>
	          			<div class="col-lg-6 col-xl-6 pb-3 pb-xs-3">
	          				<a href="#terapi" class="btn btn-warning px-lg-5 py-lg-3 font-weight-bold">Request Assessment</a>
	          			</div>
	          		</div>
	          		@endif
	          		<div class="col-lg-12 col-xl-12">
	          			<a href="#visimisi" class="btn btn-light px-lg-5 py-lg-3">TAHU LEBIH BANYAK</a>
	          		</div>
	            </div>
        	</div>
          </div>
        </div>
      </div>
    </div>

	@yield('content')

	<div class="container-fluid bg-navy py-3">
		<div class="container d-lg-inline-flex">
			<div class="col-lg-4 col-xl-4 pt-3">
				<div class="col-lg-12 col-xl-12 title border-bottom border-light text-white">
					<b>
						Waktu Pelayanan Kami
					</b>
				</div>
				<div class="col-lg-12 col-xl-12 paragraph text-white pt-3">
					<div>
						<b>Regular</b>
						<br>
						Hari Senin – Jumat,  jam 08.00–17.00 WIB
						<br>
                      	Hari Sabtu,  jam 08.00–12.00 WIB
					</div>
					<div class="pt-lg-2">
						<b>Melalui Appointment</b>
						<br>
						Hari Sabtu, jam 12.00–17.00 WIB
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4 pt-3">
				<div class="col-lg-12 col-xl-12 title border-bottom border-light text-white">
					<b>
						Kontak
					</b>
				</div>
				<div class="col-lg-12 col-xl-12 paragraph text-white pt-3">
					<div>
						<b>Alamat</b>
						<br>
						<a href="https://goo.gl/maps/b9XAcpNG2KcJcHMs9" class="btn btn-link text-white text-decoration-none pl-0 paragraph text-left" target="_blank">
							Jl. Cipete IV No.6, RT.008/RW.003, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410
						</a>
					</div>
					<div class="pt-lg-2">
						<b>Telepon</b>
						<br>
						<a href="tel:02175816662" class="btn btn-link text-white text-decoration-none pl-0 paragraph">
							(62-21) 7581 6662
						</a>
					</div>
					<div class="pt-lg-2">
						<b>Email</b>
						<br>
						<a href="mailto:liliputklinik@gmail.com?subject=QUESTION" class="btn btn-link text-white text-decoration-none pl-0 paragraph" target="_blank">
							liliputklinik@gmail.com
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4 py-3">
				<div class="col-lg-12 col-xl-12 title border-bottom border-light text-white">
					<b>
						Sosial Media
					</b>
				</div>
				<div class="col-lg-12 col-xl-12 paragraph text-white pt-3">
					<div>
						<b>Facebook</b>
						<br>
						<a href="https://www.facebook.com/klinikliliputcipete/" class="btn btn-link text-white text-decoration-none pl-0 paragraph" target="_blank">
							Liliput Klinik
						</a>
					</div>
					<div>
						<b>Instagram</b>
						<br>
						<a href="https://www.instagram.com/klinikliliput/" class="btn btn-link text-white text-decoration-none pl-0 paragraph" target="_blank">
							klinikliliput
						</a>
					</div>
					<div>
						<b>Twitter</b>
						<br>
						<a href="https://www.twitter.com/klinikliliput/" class="btn btn-link text-white text-decoration-none pl-0 paragraph" target="_blank">
							klinikliliput
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container py-3">
		<div class="text-center paragraph">
			<b>
				Copyright &copy;2019. Klinik Liliput. All right reserved.
			</b>
		</div>
	</div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>




  <script>
  	$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 2;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

  	function showImage(imgName) {
	   var curImage = document.getElementById('currentImg');
	   var thePath = '../../images/';
	   var theSource = thePath + imgName;
	   curImage.src = theSource;
	   curImage.alt = imgName;
	   curImage.title = imgName;
	}

  </script>
</body>
</html>