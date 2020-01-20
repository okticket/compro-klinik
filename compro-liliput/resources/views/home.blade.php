@extends('index')
@section('content')

	<div class="container py-5" id="profil">
		<div class="col-lg-12 col-xl-12 text-center pt-lg-5 pt-xl-5">
			<h3 class="text-navy font-weight-bold profil_title" style="color: #101f32">
				SEKILAS TENTANG KLINIK LILIPUT
			</h3>
		</div>
		<div class="col-lg-12 col-xl-12 text-center mt-4">
			<p class="paragraph" style="font-size: 14px">
				Klinik Liliput adalah sebuah tempat terapi yang termasuk dalam bidang Kesehatan dan Pendidikan Nonformal bagi anak-anak yang mempunyai kebutuhan khusus seperti Autisme, Asperger’s Syndrom, Down Syndrom, Cerebral Palsy, Keterlambatan Perkembangan Psikomotor, Problem belajar/kesulitan belajar, dan lain – lain, yang terletak di Jl. Cipete, Cilandak, Jakarta Selatan.
				<br><br>
				<b>Mari bergabung bersama kami, karena telah lebih dari 1.000 klien bergabung bersama
                kami
                </b>
			</p>
		</div>
	</div>

	<div class="container-fluid pb-0 pt-lg-5 pt-xl-5 px-0" id="visimisi">
		<div class="col-lg-12 col-xl-12 text-center text-white empat-atas pb-0 pt-lg-4 pt-xl-4 m-0">
			<div class="col-lg-12 col-xl-12 pt-3">
				<h5 class="font-weight-bold text-white profil_title">
					VISI DAN MISI
				</h5>
			</div>
			<div class="col-lg-12 col-xl-12 pb-3">
				<span class="paragraph" style="font-size: 14px">
					Visi kami adalah "Melayani Secara Madani" dengan tiga misi kami yaitu :
				</span>
			</div>
		</div>
		<div class="col-lg-12 col-xl-12 col-xs-12 d-lg-inline-flex d-xs-inline-flex d-sm-inline-flex d-md-inline-flex text-center text-white p-0 m-0 satu-baris">
			<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 py-4 bagi-tiga empat-1 p-0">
				<div class="col-lg-12 col-xl-12 py-3">
					<img src="{{ asset('/images/icon/ide.png') }}" class="img-icon" alt="">
				</div>
				<div class="col-lg-12 col-xl-12 font-weight-bold">
					Satu
				</div>
				<div class="col-lg-12 col-xl-12">
					<p class="paragraph" style="font-size: 13px">
						Menjadi tempat terapi yang menjangkau semua lapisan masyarakat, tidak dibatasi status sosial ekonomi, ras, suku bangsa dan agama.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 py-4 bagi-tiga empat-2">
				<div class="col-lg-12 col-xl-12 py-3">
					<img src="{{ asset('/images/icon/fisio2.png') }}" class="img-icon" alt="">
				</div>
				<div class="col-lg-12 col-xl-12 font-weight-bold">
					Dua
				</div>
				<div class="col-lg-12 col-xl-12">
					<p class="paragraph" style="font-size: 13px">
						Menjadikan orangtua dan masyarakat sebagai mitra dengan memberikan edukasi sesuai kebutuhan anak.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-xs-4 col-sm-4 col-md-4 py-4 bagi-tiga empat-3">
				<div class="col-lg-12 col-xl-12 py-3">
					<img src="{{ asset('/images/icon/edukasi.png') }}" class="img-icon" alt="">
				</div>
				<div class="col-lg-12 col-xl-12 font-weight-bold">
					Tiga
				</div>
				<div class="col-lg-12 col-xl-12">
					<p class="paragraph" style="font-size: 13px">
						Menyediakan tenaga profesional yang berkompeten dan dapat melayani individu secara utuh/ holistik/ madani.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid px-0 hero-wrap2 bg-terapi" id="terapi">
		<div class="col-lg-6 col-xl-6 col-xs-12 col-md-12 offset-xs-0 offset-md-0 offset-lg-6 bg-opacity text-white pt-3 pt-lg-5 pt-xl-5 pb-lg-5">
			<div class="accordion" id="accordionExample">
				<div class="card bg-transparent border-0">
					<div class="card-header py-0 pt-lg-3" id="headingOne">
						<h5 class="pb-1" style="color: white">
							<strong>JENIS PELAYANAN</strong>
						</h5>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0 pt-lg-3" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" type="bu py-0tton" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Okupasi Terapi
									</li>
								</ul>
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan terapi bagi anak dengan gangguan proses sensorik (Sensory Integration, gangguan meregulasi diri dan fokus, masalah pada ketrampilan motorik halus dan ketrampilan dalam kegiatan hidup sehari-hari (Childhood Occupation).
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Sensori Integrasi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan terapi bagi anak dengan gangguan proses sensorik (Sensory Integration, gangguan meregulasi diri dan fokus, masalah pada ketrampilan motorik halus dan ketrampilan dalam kegiatan hidup sehari-hari (Childhood Occupation).
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Fisio Terapi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan terapi bagi anak dengan gangguan perkembangan motorik (belum mampu duduk, berjalan, pijat bayi, dsb).
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingFour">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Terapi Wicara
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Pelayanan terapi bagi anak dengan gangguan kemampuan berinteraksi dan berkomunikasi serta masalah pada motorik daerah mulut seperti mengunyah dan menelan (Feeding Problem).
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingFive">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Snoezelen Terapi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Pelayanan terapi bagi anak dengan gangguan konsentrasi dan regulasi diri, kesulitan perubahan adaptasi, dan lain – lain dengan memberikan stimulus sensorik untuk meningkatkan kemampuan menenangkan diri dan fokus melalui media stimulasi visual, penciuman, pendengaran, perabaan, dsb.
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingSix">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Akuatik Terapi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan terapi untuk anak dengan gangguan proses sensori (Sensory Integration) serta anak dengan gangguan perkembangan motorik dengan memberikan stimulus sensorik, motorik, dan kesadaran akan tubuh terhadap lingkungan dan bahaya melalui media air.
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingSeven">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Psikologi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan untuk diagnosis, konsultasi bagi proses tumbuh kembang anak dan permasalahan yang dihadapi keluarganya.
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingEight">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Terapi Edukasi
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Memberikan pelayanan terapi bagi anak yang mempunyai problem perilaku belajar dan problem akademik. Termasuk didalam program edukasi tersedia program "Learning Support" untuk anak-anak yang kesulitan dalam menerima poembelajaran secara klasikal.
						</div>
					</div>
				</div>
				<div class="card bg-transparent border-0">
					<div class="card-header py-0" id="headingNine">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
									<li class="font-weight-bold text-white title">
										Baby Massage
									</li>
								</ul>
							</button>
						</h5>
					</div>
					<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
						<div class="card-body paragraph" style="font-size: 14px">
							Pelayanan terapi dengan memberikan stimulasi lewat pijatan untuk membantu meningkatkan proses tumbuh kembang pada bayi.
						</div>
					</div>
				</div>

				@if (Session::get('login'))
					
					<div class="card bg-transparent border-0">
						<div class="card-header py-0" id="headingEleven">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
									<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
										<li class="font-weight-bold text-white title">
											Download Kuisioner
										</li>
									</ul>
								</button>
							</h5>
						</div>
						<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
							<div class="card-body paragraph">
								<h5 class="pl-lg-3 font-weight-bold text-white title">DOWNLOAD KUESIONER</h5>
								<form class="form-horizontal" action="{{url('/request_kuisioner')}}" method="post">
									@csrf
									<p class="pl-lg-3 paragraph">Silahkan pilih dokumen kuesioner dari jenis terapi apa yang akan anda download</p>
									<div class="form-group col-md-12 paragraph" style="text-align: left;">
										<input type="checkbox" name="ks[]" value="TW">Kuesioner Terapi Wicara<br>
										<input type="checkbox" name="ks[]" value="FT">Kuesioner Fisio Terapi<br>
										<input type="checkbox" name="ks[]" value="OP">Kuesioner Orthopedagogik<br>
										<input type="checkbox" name="ks[]" value="OTSI">Kuesioner Okupasi Terapi (OT)/Sensor Integrasi (SI)
									</div>
									<div class="col-md-12">
										<button href="#" class="btn btn-primary">Request Kuesioner</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card bg-transparent border-0">
						<div class="card-header py-0" id="headingTwelve">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed py-0" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
									<ul class="col-lg-12 col-xl-12 col-md-12 col-xs-12 pl-0">
										<li class="font-weight-bold text-white title">
											Buat Assessment Baru
										</li>
									</ul>
								</button>
							</h5>
						</div>
						<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
							<div class="card-body paragraph">
								<h5 class="pl-lg-3 font-weight-bold text-white title">ASSESSMENT BARU</h5>
								<p class="paragraph pl-lg-3">Silahkan klik button dibawah ini untuk request "Assessment Baru" dan Anda akan masuk kedalam daftar tunggu kami</p>
								<div class="col-sm-12 t-0">
									<form class="form-horizontal" action="{{url('/asses_baru')}}" method="post">
										@csrf
										<div class="box-body">
											<div class="row">
												<div class="form-group col-md-12">
													<button href="#" class="btn btn-primary">Request Assessment Baru</button>
													<input type="text" class="form-control" name="idd" value="{{Session::get('id_pasien')}}" placeholder="id" hidden><br>
													<input type="text" class="form-control" name="namad" placeholder="nama" hidden><br>
													<input type="text" class="form-control" name="emaild" placeholder="email" hidden>
												</div>
											</div>                  
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				@endif

			</div>
		</div>
	</div>

	<div class="container-fluid py-5" id="ahli">
		<div class="col-lg-12 col-xl-12">
			<div class="col-lg-12 col-xl-12 py-3 text-navy text-center text-uppercase profil_title font-weight-bold" style="color: #101f32; font-size: 20px">
				tenaga ahli
			</div>
			<div class="col-lg-12 col-xl-12 pt-2">
				<p class="paragraph text-center" style="font-size: 14px">
					Terapis kami melayani dengan sepenuh hati, memberikan pelayanan terbaik untuk terus mendukung perkembangan Anak agar dapat memaksimalkan potensinya. Di dukung dengan disiplin ilmu dari profesinya masing-masing, keikutsertaan dalam seminar dan pelatihan serta pengalaman yang mumpuni.
				</p>
			</div>
		</div>
		<div class="col-lg-12 col-xl-12 pt-3 text-center">
			<a href="{{ url('/ahli') }}" class="btn btn-warning">LIHAT DAFTAR TERAPIS</a>
		</div>
	</div>


	<div class="container-fluid my-4 py-5 mx-0 bg-gradasi-1" id="artikel" style="background: linear-gradient(45deg, #ffd800, #ff6666);">
		<div class="col-lg-12 col-xl-12 text-center pb-5 pt-lg-4 pt-xl-4">
			<b class="profil_title font-weight-bold text-navy" style="font-size: 20px">
				<strong>BERITA TERBARU</strong>
			</b>
		</div>

	    <!--Carousel Wrapper-->
	    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

			<!--Controls-->
			<div class="controls-top">
				<a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				<a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
			</div>
			<!--/.Controls-->

			<!--Slides-->
			<div class="carousel-inner pl-lg-5 pl-xl-5" role="listbox">

			    <!--First slide-->
			    <div class="carousel-item active pl-lg-5 pl-xl-5">

			      	<div class="row pl-lg-5 pl-xl-5 ml-lg-5">
				      	<a href="{{ url('/artikel/1') }}" class="col-lg-5 col-xl-5">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/h16.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Pediatric Massage Therapy
							        </h5>
							        <p class="paragraph text-justify text-truncate">
							        	Upaya kesehatan yang telah dikenal sejak ratusan tahun yang lalu dilakukan secara turun temurun oleh beberapa generasi penerus kita.
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
						</a>
				      	<a href="{{ url('/artikel/2') }}" class="col-lg-5 col-xl-5 offset-lg-1 ml-lg-2">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/motorik.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Perkembangan Normal Motorik Kasar pada Balita
							        </h5>
							        <p class="paragraph text-justify text-truncate">
							        	Tanda dari Perkembangan anak Normal Motorik Kasar pada anak mulai usia 1 sampai 5 Tahun.
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			      	</a>

			    </div>
			    <!--/.First slide-->

			    <!--Second slide-->
			    <div class="carousel-item pl-lg-5 pl-xl-5">

			        <div class="row pl-lg-5 pl-xl-5 ml-lg-5">
				      	<a href="{{ url('/artikel/3') }}" class="col-lg-5 col-xl-5">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/h16.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Fisioterapi pada Gangguan Perkembangan
							        </h5>
							        <p class="paragraph text-justify text-truncate">
							        	Problematik Fisioterapi ialah dengan mencari keterlambatan pada perkembangan motorik kasar dan halus, refleks primitif, dan respon tubuh.
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
						</a>
				      	<a href="{{ url('/artikel/4') }}" class="col-lg-5 col-xl-5 offset-lg-1 ml-lg-2">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/sibicara.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Saat Si Kecil Terlambat Bicara
							        </h5>
							        <p class="paragraph text-justify text-truncate">
							        	Setiap anak lahir dengan kecerdasan masing-masing, salah satunya kecerdasan berbahasa.
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
			          	</a>
			        </div>

			    </div>
			    <!--/.Second slide-->

			    <!--Third slide-->
			    <div class="carousel-item pl-lg-5 pl-xl-5">

			        <div class="row pl-lg-5 pl-xl-5 ml-lg-5">
				      	<a href="{{ url('/artikel/5') }}" class="col-lg-5 col-xl-5">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/sebabbicara.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Penyebab Anak Telat Bicara
							        </h5>
							        <p class="paragraph text-justify text-truncate">
							        	Keterlambatan bicara bisa muncul sendiri, tanpa gangguan (komorbitas) lainnya. Jika itu yang terjadi, berarti anak mengalami keterlambatan bicara saja.
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
						</a>
				      	<a href="{{ url('/artikel/6') }}" class="col-lg-5 col-xl-5 offset-lg-1 ml-lg-2">
							<div class="card mb-3">
							  <div class="row no-gutters">
							    <div class="col-lg-6 col-xl-6">
							      <img src="{{ asset('/images/merangkak.jpg') }}" class="card-img h-100 img-fluid" alt="...">
							    </div>
							    <div class="col-lg-6 col-xl-6">
							      <div class="card-body">
							        <h5 class="title font-weight-bold text-truncate">
							        	Anak Tidak Merangkak Tanda Adanya Gangguan?
							        </h5>
							        <p class="paragraph text-left text-truncate">
							        	Apakah benar Dok, jika anak sudah mulai rambatan dan belajar jalan, tapi ia tidak merangkak, tandanya mengalami gangguan?
							        </p>
							      </div>
							    </div>
							  </div>
							</div>
			          	</a>
			        </div>

			    </div>
			    <!--/.Third slide-->

			</div>
			<!--/.Slides-->
			
		    <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon bg-secondary text-white rounded-circle" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
		      <span class="carousel-control-next-icon bg-secondary text-white rounded-circle" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
	    </div>
	    <!--/.Carousel Wrapper-->
	</div>

  	<div id="questions_page" class="questions-area section-padding img ftco-no-pt">
        <div class="container pb-5">
            <div class="row">
				<div class="col-md-12 text-center text-uppercase font-weight-bold text-navy profil_title py-2" style="color: #101f32; font-size: 20px">
					<b>PERTANYAAN YANG SERING DITANYAKAN</b>
				</div>  
            </div>
            <div class="col-md-12 paragraph">
                <div class="col-md-12 pt-3">
                    <div class="toggole-boxs panel-group" id="faq" >             
                      	<div class="panel-heading panel-title" data-toggle="collapse" data-parent="#faq" href="#faq1">
                      		<strong>
                      			Apakah bisa mendaftar lebih dari satu jenis terapi?
                      		</strong>
                      	</div>
                  		<div id="faq1" class="panel-collapse collapse in border-bottom border-dark">
                          Bisa. Calon pasien bisa mendaftarkan lebih dari satu jenis terapi
                      	</div>
                    </div>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="faq" >             
                    	<div class="panel-heading panel-title" data-toggle="collapse" data-parent="#faq" href="#faq2">
                    		<strong>
                    			Untuk apakah link download kuesioner di setiap jenis terapi?
                    		</strong>
                    	</div>
                        <div id="faq2" class="panel-collapse collapse in border-bottom border-dark">
                            Link download kuesioner yang disediakan disetiap jenis terapi diperuntukan untuk pendaftar yang telah mencapai tahap pemanggilan assessment sebagai bahan Assesor untuk melakukan assessment. Pendaftar diharapkan mendownload Kuesioner terapi yang ditujukan, kemudian diisi, dan dibawa saat datang ke Klinik untuk melakukan assessment.
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="faq" >
                        <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#faq" href="#faq4">
                        	<strong>
                        		Bagaimanakah cara mendaftar pasien melalui website ini?
                        	</strong>
                        </div>
                        <div id="faq4" class="panel-collapse collapse in border-bottom border-dark">
                            Calon pasien menekan tombol "Register" lalu mengisi form register yang tersedia. Kemudian, Calon pasien dipersilahkan untuk "Login" dan mengisi kuesioner umum yang telah disediakan. Setelah selesai, pihak Klinik, akan menghubungi pendaftar via telefon atau email untuk melakukan assessment.
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-4">
                    <div class="toggole-boxs panel-group" id="faq" >
                        <div class="panel-heading panel-title" data-toggle="collapse" data-parent="#faq" href="#faq5">
                        	<strong>
                        		Apakah ada kontak untuk memberikan saran?
                        	</strong>
                        </div>
                        <div id="faq5" class="panel-collapse collapse in border-bottom border-dark">
                            Tentu ada, silahkan berikan kritik dan saran anda kepada kami melalui e-mail: admin@klinikliliput.com
                        </div>
                    </div>
                </div>
            </div>
    </div>
	

	<div class="container" id="galeri">
		<div id="mainContainer">
		   <div id="rightDisplay" class="row">
		      <img id="currentImg" src="{{ asset('/images/galeri/g1.jpg') }}" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" class="img-fluid w-100 img-galeri"/>
		   </div>
		   <div id="leftNav" class="row d-flex flex-wrap flex-row d-inline-flex">

		    <!--Carousel Wrapper-->
			    <div id="galeri-slider" class="carousel slide carousel-multi-item" data-ride="carousel">

					<!--Controls-->
					<div class="controls-top">
						<a class="btn-floating" href="#galeri-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
						<a class="btn-floating" href="#galeri-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
					</div>
					<!--/.Controls-->

					<!--Slides-->
					<div class="carousel-inner pl-lg-5 pl-xl-5 ml-lg-5 pl-md-4" role="listbox">
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5 active">
				   			<img src="{{ asset('/images/galeri/g1.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g1.jpg');" />
					   		<img src="{{ asset('/images/galeri/g2.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g2.jpg');" />
				   		   	<img src="{{ asset('/images/galeri/g3.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g3.jpg');" />
						</div>
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5">
				   			<img src="{{ asset('/images/galeri/g4.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g4.jpg');" />
				   			<img src="{{ asset('/images/galeri/g5.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g5.jpg');" />
					   		<img src="{{ asset('/images/galeri/g6.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g6.jpg');" />
					   	</div>
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5">
				   		   	<img src="{{ asset('/images/galeri/g7.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g7.jpg');" />
				   			<img src="{{ asset('/images/galeri/g8.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g8.jpg');" />
				   			<img src="{{ asset('/images/galeri/g9.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g9.jpg');" />
						</div>
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5">
				   		   	<img src="{{ asset('/images/galeri/g10.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g10.jpg');" />
				   			<img src="{{ asset('/images/galeri/g11.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g11.jpg');" />
				   			<img src="{{ asset('/images/galeri/g12.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g12.jpg');" />
						</div>
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5">
				   		   	<img src="{{ asset('/images/galeri/g13.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g13.jpg');" />
				   			<img src="{{ asset('/images/galeri/g14.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g14.jpg');" />
				   			<img src="{{ asset('/images/galeri/g15.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g15.jpg');" />
						</div>
						<div class="carousel-item pl-5 ml-3 pl-md-5 ml-md-5 ml-lg-5 pl-lg-5 pl-xl-5">
				   		   	<img src="{{ asset('/images/galeri/g16.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g16.jpg');" />
				   			<img src="{{ asset('/images/galeri/g17.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g17.jpg');" />
				   			<img src="{{ asset('/images/galeri/g18.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('galeri/g18.jpg');" />
						</div>
			   		</div>

				    <a class="carousel-control-prev" href="#galeri-slider" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon bg-secondary text-white rounded-circle" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#galeri-slider" role="button" data-slide="next">
				      <span class="carousel-control-next-icon bg-secondary text-white rounded-circle" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
			   	</div>

	   		</div>
		</div>
	</div>

	{{-- <div class="container" id="galeri">
		<div id="mainContainer">
		   <div id="rightDisplay" class="row">
		      <img id="currentImg" src="{{ asset('/images/h1.jpg') }}" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" class="img-fluid w-100 img-galeri" />
		   </div>
		   <div id="leftNav" class="row d-flex flex-wrap flex-row d-inline-flex">
		   		<img src="{{ asset('/images/h1.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('h1.jpg');" />
		   		<img src="{{ asset('/images/h10.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('h10.jpg');" />
	   		   	<img src="{{ asset('/images/h11.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('h11.jpg');" />
	   			<img src="{{ asset('/images/h15.jpg') }}"  class="img-fluid img-thumbnail h-50 w-25" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" onclick="showImage('h15.jpg');" />
	   		</div>
		</div>
	</div> --}}

	<!-- <div class="container-fluid m-0 p-0 pt-lg-5 pt-xl-5" id="galeri">
		Carousel Wrapper
		<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
		    Slides
		    <div class="carousel-inner" role="listbox">
		        <div class="carousel-item active">
		            <img class="d-block w-100" src="{{ asset('/images/h1.jpg') }}" alt="First slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h2.jpg') }}" alt="Second slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h3.jpg') }}" alt="Third slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h4.jpg') }}" alt="Fourth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h5.jpg') }}" alt="Fifth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h6.jpg') }}" alt="Sixth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h7.jpg') }}" alt="Second slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h8.jpg') }}" alt="Third slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h9.jpg') }}" alt="Fourth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h10.jpg') }}" alt="Fifth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h11.jpg') }}" alt="Sixth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h12.jpg') }}" alt="Second slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h13.jpg') }}" alt="Third slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h14.jpg') }}" alt="Fourth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h15.jpg') }}" alt="Fifth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h16.jpg') }}" alt="Sixth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h17.jpg') }}" alt="Second slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h18.jpg') }}" alt="Third slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h19.jpg') }}" alt="Fourth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h20.jpg') }}" alt="Fifth slide">
		        </div>
		        <div class="carousel-item">
		            <img class="d-block w-100" src="{{ asset('/images/h21.jpg') }}" alt="Fifth slide">
		        </div>
		    </div>
		    /.Slides
		    Controls
		    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
		        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		    </a>
		    /.Controls
		    <ol class="carousel-indicators py-3" style="background-color: rgba(0,0,0,0.5)">
		        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> 
		        	<img class="d-block w-100" src="{{ asset('/images/h1.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="1">
		        	<img class="d-block w-100" src="{{ asset('/images/h2.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="2">
		        	<img class="d-block w-100" src="{{ asset('/images/h3.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="3"> 
		        	<img class="d-block w-100" src="{{ asset('/images/h4.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="4">
		        	<img class="d-block w-100" src="{{ asset('/images/h5.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="5">
		        	<img class="d-block w-100" src="{{ asset('/images/h6.jpg') }}" class="img-fluid">
		        </li>>
		        <li data-target="#carousel-thumb" data-slide-to="6">
		        	<img class="d-block w-100" src="{{ asset('/images/h7.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="7">
		        	<img class="d-block w-100" src="{{ asset('/images/h8.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="8"> 
		        	<img class="d-block w-100" src="{{ asset('/images/h9.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="9">
		        	<img class="d-block w-100" src="{{ asset('/images/h10.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="10">
		        	<img class="d-block w-100" src="{{ asset('/images/h11.jpg') }}" class="img-fluid">
		        </li>>
		        <li data-target="#carousel-thumb" data-slide-to="11">
		        	<img class="d-block w-100" src="{{ asset('/images/h12.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="12">
		        	<img class="d-block w-100" src="{{ asset('/images/h13.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="13"> 
		        	<img class="d-block w-100" src="{{ asset('/images/h14.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="14">
		        	<img class="d-block w-100" src="{{ asset('/images/h15.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="15">
		        	<img class="d-block w-100" src="{{ asset('/images/h16.jpg') }}" class="img-fluid">
		        </li>>
		        <li data-target="#carousel-thumb" data-slide-to="16">
		        	<img class="d-block w-100" src="{{ asset('/images/h17.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="17">
		        	<img class="d-block w-100" src="{{ asset('/images/h18.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="18"> 
		        	<img class="d-block w-100" src="{{ asset('/images/h19.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="19">
		        	<img class="d-block w-100" src="{{ asset('/images/h20.jpg') }}" class="img-fluid">
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="20">
		        	<img class="d-block w-100" src="{{ asset('/images/h21.jpg') }}" class="img-fluid">
		        </li>
		    </ol>
		</div>
		/.Carousel Wrapper	                        
	</div> -->

	<div class="container py-5" id="alamat">
		<div class="col-lg-12 col-xl-12 text-center py-lg-5">
			<b class="profil_title" style="color: #101f32; font-size: 20px">
				TEMUKAN KAMI
			</b>
		</div>
		<div class="col-lg-12 col-xl-12 pt-3 bg-white d-lg-inline-flex">
			<div class="col-lg-6 col-xl-6 pt-3 pb-3">
				<div class="col-lg-12 col-xl-12 title font-weight-bold pt-lg-2 pt-xl-2">
					Alamat
				</div>
				<div class="col-lg-12 col-xl-12 paragraph">
					Jl. Cipete IV No.6, RT.008/RW.003, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410
				</div>
				<div class="col-lg-12 col-xl-12 title font-weight-bold pt-lg-4 pt-xl-4">
					Kontak
				</div>
				<div class="col-lg-12 col-xl-12 paragraph">
					(62-21) 7581 6662
				</div>
				<div class="col-lg-12 col-xl-12 title font-weight-bold pt-lg-4 pt-xl-4">
					Email
				</div>
				<div class="col-lg-12 col-xl-12 paragraph">
					liliputklinik@gmail.com
				</div>
				<div class="col-lg-12 col-xl-12 title font-weight-bold pt-lg-4 pt-xl-4">
					Website
				</div>
				<div class="col-lg-12 col-xl-12 paragraph">
					klinikliliput.com
				</div>
			</div>
			<div class="col-lg-6 col-xl-6 pt-1">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.6324675082712!2d106.7996608233309!3d-6.276718481999471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1947e5859f7%3A0xc0070d0627b2ce87!2sKlinik+Liliput!5e0!3m2!1sid!2sid!4v1564732206438!5m2!1sid!2sid" width="100%" height="450" style="
				border: 0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
    <script type="text/javascript">
      function printChecked(){
        var items=document.getElementsByName('acs');
        var selectedItems="";
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox' && items[i].checked==true)
            selectedItems+=items[i].value+", ";
        }
        //alert(selectedItems);
        document.getElementById("id_image").value = selectedItems;

      }     
    </script>
@endsection