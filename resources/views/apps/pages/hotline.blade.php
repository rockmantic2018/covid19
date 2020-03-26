@extends('apps.app')
@section('content')
<div class="side-app">
	<!-- page-header -->
	<div class="page-header">
		<ol class="breadcrumb"><!-- breadcrumb -->
			<li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
			<li class="breadcrumb-item active" aria-current="page">Hotline</li>
		</ol><!-- End breadcrumb -->
	</div>
	<!-- End page-header -->
	<!-- row -->
    <div class="row row-cards">
    	<div class="col-sm-12 text-center">
			<h2 >Coronavirus Hotline Indonesia</h2>
			<h4>
				Layanan darurat via telepon yang disediakan oleh Kemkes dan juga Pemprov Aceh
			</h4>
    	</div>
    	<br><br><hr>
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/menkes.png') }}" width="50" height="50">
					<p class="card-text mt-3 mb-3">Kementrian Kesehatan</p>
					<a href="tel:0215210411">
						<p class="h2 text-center  text-primary">021-5210-411</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/menkes.png') }}" width="50" height="50">
					<p class="card-text mt-3 mb-3">Kementrian Kesehatan</p>
					<a href="tel:081212123119">
						<p class="h2 text-center  text-primary">0812-1212-3119</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/aceh.png') }}" width="60" height="50">
					<p class="card-text mt-3 mb-3">Pemprov Aceh</p>
					<a href="tel:06517319111">
						<p class="h2 text-center text-primary">(0651) 7319111</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/aceh.png') }}" width="60" height="50">
					<p class="card-text mt-3 mb-3">Pemprov Aceh</p>
					<a href="tel:065122118">
						<p class="h2 text-center text-primary">(0651) 22118</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/rsudza.png') }}" width="50" height="50">
					<p class="card-text mt-3 mb-3">RSUD dr. Zainoel Abidin, Banda Aceh</p>
					<a href="tel:065134565">
						<p class="h2 text-center text-primary">0651-34565</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/aceh-selatan.png') }}" width="50" height="50">
					<p class="card-text mt-3 mb-3">RSUD Dr. H. YULIDDIN AWAY, Aceh Selatan</p>
					<a href="tel:065621023">
						<p class="h2 text-center text-primary">0656-21023</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/abdya.jpg') }}" width="40" height="50">
					<p class="card-text mt-3 mb-3">RSUD Tgk. PEUKAN ABDYA, Aceh Barat Daya</p>
					<a href="tel:065134565">
						<p class="h2 text-center text-primary">0651-34565</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
		    <div class="card">
				<div class="card-body text-center list-icons">
					<img src="{{ asset('uploads/nagan-raya.png') }}" width="40" height="50">
					<p class="card-text mt-3 mb-3">RSUD NAGAN RAYA , <br>Nagan Raya</p>
					<a href="tel:06557007401">
						<p class="h2 text-center text-primary">0655-7007401</p>
					</a>
				</div>
			</div>
		</div><!-- col end -->
	</div>
	<!-- row end -->
</div>
@endsection