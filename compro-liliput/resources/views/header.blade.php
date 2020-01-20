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
    <div class="hero-wrap container-fluid bannerindex_liliput" id="home">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center pt-lg-5 pt-xl-5 pt-xs-4 pt-xl-4 mb-5 pb-5">
          <div class="offset-lg-7 offset-xl-7 col-lg-5 col-xl-5 col-md-6 ftco-animate pt-lg-5 pt-xl-5 pt-xs-4 pt-xl-4 bg-gradient">
        	<div class="col-md-12">
	          	<div class="text text-center mt-3 pt-4 pb-lg-5 pt-xs-4">
		            <h1 class="mb-2 text-uppercase text-white" style="font-family:'Penguin Attack';font-weight:normal;font-size:5vw;">Klinik Liliput</h1>
		            <p class="text-white text-capitalize motto">helping hands in your child's development</p>
	            </div>
        	</div>
        	<div class="col-md-12 pt-lg-5 jarak">
	          	<div class="text text-center pt-lg-5">
	          		<div class="col-lg-12">
	          			<a href="#" class="btn btn-light px-lg-5 py-lg-3">TAHU LEBIH BANYAK</a>
	          		</div>
	            </div>
        	</div>
          </div>
        </div>
      </div>
    </div>

	@yield('isi')

	<div class="container-fluid bg-navy py-3">
		<div class="container d-lg-inline-flex">
			<div class="col-lg-4 pt-3">
				<div class="col-lg-12 title border-bottom border-light text-white">
					<b>
						Waktu Pelayanan Kami
					</b>
				</div>
				<div class="col-lg-12 paragraph text-white pt-3">
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
			<div class="col-lg-4 pt-3">
				<div class="col-lg-12 title border-bottom border-light text-white">
					<b>
						Kontak
					</b>
				</div>
				<div class="col-lg-12 paragraph text-white pt-3">
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
			<div class="col-lg-4 py-3">
				<div class="col-lg-12 title border-bottom border-light text-white">
					<b>
						Sosial Media
					</b>
				</div>
				<div class="col-lg-12 paragraph text-white pt-3">
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