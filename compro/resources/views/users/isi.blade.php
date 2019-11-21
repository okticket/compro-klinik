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
          <a class="btn btn-primary px-4 py-3" href="{{ url('/')}}">Logout</a>
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
          </div>
        </div>
    </section>
    
  <section class="ftco-section ftco-services ftco-no-pt ftco-no-pb my-5" style="background-image: url('img/head.jpg');">
      <div class="container pb-5">
        <div class="col-md-12 text-center py-3">
            <h1>
                VISI MISI
            </h1>
            <h4 class="col-md-12 text-center py-3" style="color: #ff8ba7;">
              Visi kami adalah "<b>Melayani Secara Madani</b>" dengan 3 Misi kami yaitu:<br>
            </h4>
        </div>
        
        <div class="ftco-services row no-gutters services-section mb-5">
          <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <!--<div class="icon"><span class="flaticon-number-1"></span></div>-->
                <div class="icon"><img src="{{asset('img/icon/ide.png')}}" style="height: 100px; width: 100px"></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Satu</h3>
                  <p style="color: #ff8ba7;">Menjadi tempat terapi yang menjangkau semua lapisan masyarakat, tidak dibatasi status sosial ekonomi, ras, suku bangsa dan agama</p>
                  <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2 text-center d-block">
                <!--<div class="icon"><span class="flaticon-number-2"></span></div>-->
                <div class="icon"><img src="{{asset('img/icon/fisio2.png')}}" style="height: 100px; width: 100px"></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Dua</h3>
                  <p style="color: #ff8ba7;">Menjadikan orangtua dan masyarakat sebagai mitra dengan memberikan edukasi sesuai kebutuhan anak</p>
                  <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
                </div>
              </div>    
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services text-center d-block">
                <div class="media-body">
                  <!--<div class="icon"><span class="flaticon-numbre-3"></span></div>-->
                  <div class="icon"><img src="{{asset('img/icon/edukasi.png')}}" style="height: 100px; width: 100px"></div>
                  <h3 class="heading mb-3">Tiga</h3>
                  <p style="color: #ff8ba7;">Menyediakan tenaga profesional yang berkompeten dan dapat melayani individu secara utuh/holistik/madani</p>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb vh-100" id="profil-section" style="background-image: url('img/profile.jpg');">
      <div class="container py-5">
        <div class="row d-flex">
          <br>
          <br>
          <div class="col-md-6 col-lg-4 pl-lg-5 mt-5 d-flex">
            <div class="img d-flex align-self-stretch align-items-center" style="background-image:url('images/about.jpg');height: 350px">
            </div>
          </div>
          <div class="col-md-6 col-lg-7 pl-lg-5 py-0">
            <br>
            <br>
            <div class="py-md-0">
              <div class="row justify-content-start pb-3">
              <div class="col-md-12 text-left py-0">
                <h1 style="color: #ff8ba7;">
                  Profil Klinik Liliput
                </h1>
              </div>
              <div class="col-md-12 heading-section ftco-animate py-md-5">
                  <p style="color: #ff8ba7; font-size: 19px;">Klinik Liliput adalah sebuah tempat terapi yang termasuk dalam bidang Kesehatan dan Pendidikan Nonformal bagi anak-anak yang mempunyai kebutuhan khusus seperti Autisme, Asperger’s Syndrom, Down Syndrom, Cerebral Palsy, Keterlambatan Perkembangan Psikomotor, Problem belajar/kesulitan belajar, dan lain – lain, yang terletak di Jl. Cipete, Cilandak, Jakarta Selatan.</p>
                  <br>
                  <h4 style="font-size: 19px; color: #ff8ba7">
                  Dan kurang lebih sudah ada <span class="number" data-number="300">0</span> anak telah menjadi pasien kami</h4>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  
  <section class="ftco-section ftco-no-pb ftco-no-pt ftco-program bg-light" id="programs-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap" style="height:585px !important">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 flaticon-adn-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"> Okupasi Terapi</a>

              <a class="nav-link px-4 flaticon-adn-3" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"> Fisio Terapi</a>

              <a class="nav-link px-4 flaticon-relationship" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"> Terapi Wicara</a>

              <a class="nav-link px-4 flaticon-counseling" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"> Snoezelen Terapi</a>

              <a class="nav-link px-4 flaticon-rehabilitation-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"> Akuatik Terapi</a>

              <a class="nav-link px-4 flaticon-clinic" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"> Psikologi</a>

              <a class="nav-link px-4 flaticon-spiral" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"> Terapi Edukasi (OT)</a>

              <a class="nav-link px-4 flaticon-aroma" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false"> Baby Massage</a>

              <a class="nav-link px-4 flaticon-aroma" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-8" aria-selected="false"> Play Therapy</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center" style="height:585px !important">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-0" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <span class="icon mb-3 d-block flaticon-adn-1"></span>
                <h2 class="mb-4">Okupasi Terapi/Sensori Integrasi</h2>
                <p>Memberikan pelayanan terapi bagi anak dengan gangguan proses sensorik (Sensory Integration, gangguan meregulasi diri dan fokus, masalah pada ketrampilan motorik halus dan ketrampilan dalam kegiatan hidup sehari-hari (Childhood Occupation)</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <span class="icon mb-3 d-block flaticon-adn-3"></span>
                <h2 class="mb-4">Fisio Terapi</h2>
                <p>Memberikan pelayanan terapi bagi anak dengan gangguan perkembangan motorik (belum mampu duduk, berjalan, pijat bayi, dsb)</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <span class="icon mb-3 d-block flaticon-relationship"></span>
                <h2 class="mb-4">Terapi Wicara</h2>
                <p>Pelayanan terapi bagi anak dengan gangguan kemampuan berinteraksi dan berkomunikasi serta masalah pada motorik daerah mulut seperti mengunyah dan menelan (Feeding Problem)</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block flaticon-counseling"></span>
                <h2 class="mb-4">Snoezelen Terapi</h2>
                <p>Pelayanan terapi bagi anak dengan gangguan konsentrasi dan regulasi diri, kesulitan perubahan adaptasi, dan lain – lain dengan memberikan stimulus sensorik untuk meningkatkan kemampuan menenangkan diri dan fokus melalui media stimulasi visual, penciuman, pendengaran, perabaan, dsb </p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <span class="icon mb-3 d-block flaticon-rehabilitation-1"></span>
                <h2 class="mb-4">Akuatik Terapi</h2>
                <p>Memberikan pelayanan terapi untuk anak dengan gangguan proses sensori (Sensory Integration) serta anak dengan gangguan perkembangan motorik dengan memberikan stimulus sensorik, motorik, dan kesadaran akan tubuh terhadap lingkungan dan bahaya melalui media air</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <span class="icon mb-3 d-block flaticon-clinic"></span>
                <h2 class="mb-4">Psikologi</h2>
                <p>Memberikan pelayanan untuk diagnosis, konsultasi bagi proses tumbuh kembang anak dan permasalahan yang dihadapi keluarganya</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                <span class="icon mb-3 d-block flaticon-spiral"></span>
                <h2 class="mb-4">Terapi Edukasi (Orthopedagogik)</h2>
                <p>Memberikan pelayanan terapi bagi anak yang mempunyai problem perilaku belajar dan problem akademik. Termasuk didalam program edukasi tersedia program "Learning Support" untuk anak-anak yang kesulitan dalam menerima poembelajaran secara klasikal</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
                <br>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                <span class="icon mb-3 d-block flaticon-aroma"></span>
                <h2 class="mb-4">Baby Massage</h2>
                <p>Pelayanan terapi dengan memberikan stimulasi lewat pijatan untuk membantu meningkatkan proses tumbuh kembang pada bayi</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                <span class="icon mb-3 d-block flaticon-aroma"></span>
                <h2 class="mb-4">Play Therapy</h2>
                <p>Pelayanan terapi dengan memberikan stimulasi lewat pijatan untuk membantu meningkatkan proses tumbuh kembang pada bayi</p>
                <br>
                <p><a href="#" class="btn btn-primary px-4 py-3">Download Kuesioner</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb vh-100" id="blog-section" style="background-image: url('img/header.jpg');">
    <div id="move" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" id="move">
        <div class="carousel-item active">
          <div class="container py-5">
            <div class="row d-flex">
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('images/sibicara.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/one')}}">Saat Si Kecil Terlambat Bicara</a></h3>
                    <p style="font-size: 13pt">Setiap anak lahir dengan kecerdasan masing-masing, salah satunya kecerdasan berbahasa.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry">
                  <a href="single.html" class="block-20" style="background-image: url('images/sebabbicara.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/two')}}">Penyebab Anak Telat Bicara</a></h3>
                    <p style="font-size: 13pt">Keterlambatan bicara bisa muncul sendiri, tanpa gangguan (komorbitas) lainnya. Jika itu yang terjadi, berarti anak mengalami keterlambatan bicara saja. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('images/merangkak.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/three')}}">Anak Tidak Merangkak Tanda Adanya Gangguan?</a></h3>
                    <p style="font-size: 13pt">Apakah benar Dok, jika anak sudah mulai rambatan dan belajar jalan, tapi ia tidak merangkak, tandanya mengalami gangguan?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container py-5">
            <div class="row d-flex">
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry">
                  <a href="single.html" class="block-20" style="background-image: url('images/motorik.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/four')}}">Perkembangan Normal Motorik Kasar pada Balita</a></h3>
                    <p style="font-size: 13pt">Tanda atau Perkembangan Normal Motorik Kasar pada anak mulai usia 1 (satu) sampai 5 (lima) Tahun.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('images/pediatric.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/five')}}">Pediatric Massage Therapy</a></h3>
                    <p style="font-size: 13pt">Upaya kesehatan yang telah dikenal sejak ratusan tahun yang lalu dilakukan turun temurun oleh beberapa generasi penerus kita.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate d-block w-100">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('images/fisioterapi.jpg');">
                  </a>
                  <div class="text float-right d-block">
                    <h3 class="heading"><a href="{{url('/six')}}">Fisioterapi pada Gangguan Perkembangan</a></h3>
                    <p style="font-size: 13pt">Problematik Fisioterapi ialah mencari keterlambatan perkembangan motorik kasar dan halus, refleks primitif, dan respon tubuh.</p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#move" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#move" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section ftco-no-pt vh-10" id="contact-section" style="background-image: url('img/head.jpg'); height: 600px;">
      <div class="container">
        <br>
        <br>
        <div class="row block-1">
          <div class="col-md-6 order-md-last d-flex">
            <form class="p-1 p-sm-1 contact-form">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.6324675082712!2d106.7996608233309!3d-6.276718481999471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1947e5859f7%3A0xc0070d0627b2ce87!2sKlinik+Liliput!5e0!3m2!1sid!2sid!4v1564732206438!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </form>        
          </div>

          <div class="col-md-6 d-flex">
            <div class="row d-flex contact-info mb-5">
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-2 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-map-signs"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Address</h3>
                    <p>Jl. Cipete IV No.6, RT.2/RW.4, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-2 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-phone2"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Contact Number</h3>
                    <p><a href="tel://1234567920">(62-21) 7581 6662</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-2 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-paper-plane"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">liliputklinik@gmail.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-2 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-globe"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Website</h3>
                    <p><a href="#">klinikliliput.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="go" class="carousel slide gallery ftco-section ftco-no-pt ftco-no-pb vh-100" data-ride="carousel" style="background-image: url('img/head.jpg'); height: 1500px">
      <div class="container py-1">
          <div class="space-50"></div>
          <div class="col-md-12 heading-section text-center ftco-animate">
              <h2 class="mb-4">Gallery</h2>
          </div>
          <div class="space-40"></div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/g1.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g1.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g2.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g2.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g3.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g3.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g4.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g4.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/g5.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g5.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g6.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g6.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g7.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g7.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/g8.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g8.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/g9.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/g9.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h1.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h1.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h2.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h2.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h3.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h3.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/h4.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h4.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h5.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h5.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h6.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h6.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h7.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h7.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/h8.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h8.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h9.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h9.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h10.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h10.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h11.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h11.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/h12.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h12.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h13.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h13.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h14.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h14.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h15.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h15.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/h16.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h16.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h17.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h17.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h18.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h18.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h19.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h19.jpg);">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3 ftco-animate">
                  <a href="images/h20.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h20.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h21.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h21.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h22.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h22.jpg);">
                  </a>
                </div>
                <div class="col-md-3 ftco-animate">
                  <a href="images/h23.jpg" class="gallery image-popup img d-flex align-items-center d-block w-100" style="background-image: url(images/h23.jpg);">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#go" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
            <span class="sr-only">Prev</span>
          </a>
          <a class="carousel-control-next" href="#go" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      <div class="space-70"></div>
  </section>

  <section id="questions_page" class="questions-area section-padding vh-100" style="background-image: url('img/head.jpg');">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center py-5">
                <h2>
                  Frequently Ask Question
                </h2>
              </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="accordion" >             
                          <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #ff8ba7;"><strong>Apakah bisa mendaftar lebih dari satu jenis terapi?</strong></div>
                          <div id="collapse1" class="panel-collapse collapse in">
                              Bisa. Calon pasien bisa mendaftarkan lebih dari satu jenis terapi
                          </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="accordion" >             
                          <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: #ff8ba7;"><strong>Untuk apakah link download kuesioner di setiap jenis terapi?</strong></div>
                          <div id="collapse2" class="panel-collapse collapse in">
                              Link download kuesioner yang disediakan disetiap jenis terapi diperuntukan untuk pendaftar yang telah mencapai tahap pemanggilan assessment sebagai bahan Assesor untuk melakukan assessment. Pendaftar diharapkan mendownload Kuesioner terapi yang ditujukan, kemudian diisi, dan dibawa saat datang ke Klinik untuk melakukan assessment.
                          </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="accordion" >
                          <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: #ff8ba7;"><strong>Bagaimanakah cara mendaftar pasien melalui website ini?</strong></div>
                          <div id="collapse3" class="panel-collapse collapse in">
                              Calon pasien menekan tombol "Register" lalu mengisi form register yang tersedia. Kemudian, Calon pasien dipersilahkan untuk "Login" dan mengisi kuesioner umum yang telah disediakan. Setelah selesai, pihak Klinik, akan menghubungi pendaftar via telefon atau email untuk melakukan assessment.
                          </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="accordion" >
                          <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color: #ff8ba7;"><strong>Apakah ada kontak untuk memberikan saran?</strong></div>
                          <div id="collapse4" class="panel-collapse collapse out">
                              Tentu ada, silahkan berikan kritik dan saran anda kepada kami melalui e-mail: admin@klinikliliput.com
                          </div>
                    </div>
                </div>
            </div>

    </section>

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