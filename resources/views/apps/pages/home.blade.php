@extends('apps.app')

@section('content')
<div class="side-app">

    <!-- page-header -->
	<div class="page-header">
		<ol class="breadcrumb"><!-- breadcrumb -->
			<li class="breadcrumb-item active" aria-current="page">Beranda</li>
		</ol><!-- End breadcrumb -->
	</div>
	<!-- End page-header -->


	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<a target="_blank" href="https://www.unicef.org/indonesia/id/coronavirus">
				<div class="card bg-primary">
					<div class="card-body">
						<div class="d-flex no-block align-items-center">
							<div>
								<h6 class="text-white">Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui</h6>
								<h2 class="text-white m-0 ">Unicef Indonesia</h2>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-6">
			<a target="_blank" href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
				<div class="card bg-primary">
					<div class="card-body">
						<div class="d-flex no-block align-items-center">
							<div>
								<h6 class="text-white">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</h6>
								<h2 class="text-white m-0 ">Kompas</h2>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-6">
			<a target="_blank" href="https://infeksiemerging.kemkes.go.id/">
				<div class="card bg-success">
					<div class="card-body">
						<div class="d-flex no-block align-items-center">
							<div>
								<h6 class="text-white">Media Informasi Resmi Penyakit Infeksi Emerging</h6>
								<h2 class="text-white m-0 ">Kementrian Kesehatan</h2>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div><!-- col end -->
		<div class="col-sm-12 col-md-6 col-lg-6">
			<a target="_blank" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
				<div class="card bg-danger">
					<div class="card-body">
						<div class="d-flex no-block align-items-center">
							<div>
								<h6 class="text-white">Coronavirus Disease (COVID-19) Advice for The Public</h6>
								<h2 class="text-white m-0 ">WHO</h2>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div><!-- col end -->
		<div class="col-md-12">
			<div class="owl-carousel owl-carousel2 owl-theme mb-5">
				<div class="item">
					<div class="card mb-0">
						<div class="row">
							<div class="col-4">
								<div class="feature">
									<div class="fa-stack fa-lg fa-2x icon bg-primary-transparent">
										<i class="si si-people  fa-stack-1x text-primary"></i>
									</div>
								</div>
							</div>
							<div class="col-8">
								<div class="card-body p-3  d-flex">
									<div>
										<p class="text-muted mb-1">Total Positif (Dunia)</p>
										<h2 class="mb-0 text-dark">{{ $posi['value'] }}</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="row">
							<div class="col-4">
								<div class="feature">
									<div class="fa-stack fa-lg fa-2x icon bg-success-transparent">
										<i class="si si-emotsmile fa-stack-1x text-success"></i>
									</div>
								</div>
							</div>
							<div class="col-8">
								<div class="card-body p-3  d-flex">
									<div>
										<p class="text-muted mb-1">Total Sembuh (Dunia)</p>
										<h2 class="mb-0 text-dark">{{ $semb['value'] }}</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="row">
							<div class="col-4">
								<div class="feature">
									<div class="fa-stack fa-lg fa-2x icon bg-pink-transparent">
										<i class="si si-user-unfollow fa-stack-1x text-pink"></i>
									</div>
								</div>
							</div>
							<div class="col-8">
								<div class="card-body p-3  d-flex">
									<div>
										<p class="text-muted mb-1">Meninggal (Dunia)</p>
										<h2 class="mb-0 text-dark">{{ $meni['value'] }}</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection