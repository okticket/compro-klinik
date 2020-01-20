@extends('header')

@section('isi')


	<div class="container-fluid py-5" id="ahli">
		<div class="col-lg-12">
			<div class="col-lg-12 py-3 text-navy text-center text-uppercase profil_title font-weight-bold" style="color: #fe9801; font-size: 20px">
				tenaga ahli
			</div>
			<div class="col-lg-12 pb-3">
				<p class="paragraph text-center" style="font-size: 14px">
					Terapis kami melayani dengan sepenuh hati, memberikan pelayanan terbaik untuk terus mendukung perkembangan Anak agar dapat memaksimalkan potensinya. Di dukung dengan disiplin ilmu dari profesinya masing-masing, keikutsertaan dalam seminar dan pelatihan serta pengalaman yang mumpuni.
				</p>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="col-lg-12 col-md-12 col-xs-12 text-center">
				<ul class="nav nav-pills nav-pills-peach mb-3 d-flex justify-content-center pb-3 m-auto flex-wrap text-center" id="pills-tab" role="tablist">
					<li class="nav-item pb-1">
						<a class="nav-link title active" id="pills-semua-terapis-tab" data-toggle="pill" href="#pills-semua-terapis" role="tab" aria-controls="pills-semua-terapis" aria-selected="true" style="font-size: 12px">Semua Terapis</a>
					</li>
					<li class="nav-item pb-1">
						<a class="nav-link title" id="pills-terapis-wicara-tab" data-toggle="pill" href="#pills-terapis-wicara" role="tab" aria-controls="pills-terapis-wicara" aria-selected="false" style="font-size: 12px">Terapis Wicara</a>
					</li>
					<li class="nav-item pb-1">
						<a class="nav-link title" id="pills-terapis-okupasi-tab" data-toggle="pill" href="#pills-terapis-okupasi" role="tab" aria-controls="pills-terapis-okupasi" aria-selected="false" style="font-size: 12px">Terapis Okupasi</a>
					</li>
					<li class="nav-item pb-1">
						<a class="nav-link title" id="pills-terapis-fisio-tab" data-toggle="pill" href="#pills-terapis-fisio" role="tab" aria-controls="pills-terapis-fisio" aria-selected="false" style="font-size: 12px">Terapis Fisio</a>
					</li>
				    <li class="nav-item pb-1">
						<a class="nav-link title" id="pills-terapis-edukasi-tab" data-toggle="pill" href="#pills-terapis-edukasi" role="tab" aria-controls="pills-terapis-fisio" aria-selected="false" style="font-size: 12px">Terapis Edukasi</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-semua-terapis" role="tabpanel" aria-labelledby="pills-semua-terapis-tab">
						<div class="col-lg-12 col-md-12 col-xs-12 d-flex flex-wrap">
							@foreach ($semua as $all)
								<div class="col-lg-2 col-md-2 col-xs-6 pb-3">
									<div class="col-lg-12 col-xs-12 text-center p-0">
										<img src="{{asset('/images/terapis')}}/{{$all->foto}}.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-lg-12 col-xs-12 bg-warning py-1 text-center" style="font-size: 13px">
										{{ $all->nama }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="pills-terapis-wicara" role="tabpanel" aria-labelledby="pills-terapis-wicara-tab">
						<div class="col-lg-12 col-md-12 col-xs-12 d-flex flex-wrap">
							@foreach ($terapis_wicara as $tw)
								<div class="col-lg-2 col-md-2 col-xs-6 pb-3">
									<div class="col-lg-12 col-xs-12 text-center p-0">
										<img src="{{asset('/images/terapis')}}/{{$tw->foto}}.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-lg-12 col-xs-12 paragraph bg-warning py-1 text-center" style="font-size: 13px">
										{{ $tw->nama }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="pills-terapis-okupasi" role="tabpanel" aria-labelledby="pills-terapis-okupasi-tab">
						<div class="col-lg-12 col-md-12 col-xs-12 d-flex flex-wrap">
							@foreach ($terapis_okupasi as $op)
								<div class="col-lg-2 col-md-2 col-xs-6 pb-3">
									<div class="col-lg-12 col-xs-12 text-center p-0">
										<img src="{{asset('/images/terapis')}}/{{$op->foto}}.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-lg-12 col-xs-12 paragraph bg-warning py-1 text-center" style="font-size: 13px">
										{{ $op->nama }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="pills-terapis-fisio" role="tabpanel" aria-labelledby="pills-terapis-fisio-tab">
						<div class="col-lg-12 col-md-12 col-xs-12 d-flex flex-wrap">
							@foreach ($terapis_fisio as $ft)
								<div class="col-lg-2 col-md-2 col-xs-6 pb-3">
									<div class="col-lg-12 col-xs-12 text-center p-0">
										<img src="{{asset('/images/terapis')}}/{{$ft->foto}}.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-lg-12 col-xs-12 paragraph bg-warning py-1 text-center" style="font-size: 13px">
										{{ $ft->nama }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="pills-terapis-edukasi" role="tabpanel" aria-labelledby="pills-terapis-edukasi-tab">
						<div class="col-lg-12 col-md-12 col-xs-12 d-flex flex-wrap">
							@foreach ($terapis_edukasi as $ft)
								<div class="col-lg-2 col-md-2 col-xs-6 pb-3">
									<div class="col-lg-12 col-xs-12 text-center p-0">
										<img src="{{asset('/images/terapis')}}/{{$ft->foto}}.jpg" alt="" class="img-fluid">
									</div>
									<div class="col-lg-12 col-xs-12 paragraph bg-warning py-1 text-center" style="font-size: 13px">
										{{ $ft->nama }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 text-center pb-5">
		<a href="{{ url('/') }}" class="btn btn-warning font-weight-bold p-3 text-white px-5">Kembali</a>
	</div>

@endsection