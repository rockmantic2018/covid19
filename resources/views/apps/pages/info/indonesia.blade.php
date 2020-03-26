@extends('apps.app')

@section('css')
<!-- Data table css -->
<link href="{!! asset('wecare') !!}/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{!! asset('wecare') !!}/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="side-app">

	<!-- page-header -->
	<div class="page-header">
		<ol class="breadcrumb"><!-- breadcrumb -->
			<li class="breadcrumb-item"><a href="#">Beranda</a></li>
			<li class="breadcrumb-item"><a href="#">Statistik</a></li>
			<li class="breadcrumb-item active" aria-current="page">Indonesia</li>
		</ol><!-- End breadcrumb -->
	</div>
	<!-- End page-header -->

	<div class="row">
		<div class="col-sm-12 col-lg-6 col-xl-4">
			<div class="card">
				<div class="row">
					<div class="col-4">
						<div class="feature">
							<div class="fa-stack fa-lg fa-2x icon bg-purple">
								<i class="fa fa-bed fa-stack-1x text-white"></i>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card-body p-3  d-flex">
							<div>
								<p class="text-muted mb-1">Total Positif</p>
								<h2 class="mb-0 text-dark">{{ $stats[0]['positif'] }}</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-lg-6 col-xl-4">
			<div class="card">
				<div class="row">
					<div class="col-4">
						<div class="feature">
							<div class="fa-stack fa-lg fa-2x icon bg-success">
								<i class="fa fa-smile-o fa-stack-1x text-white"></i>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card-body p-3  d-flex">
							<div>
								<p class="text-muted mb-1">Total Sembuh</p>
								<h2 class="mb-0 text-dark">{{ $stats[0]['sembuh'] }}</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-sm-12 col-lg-6 col-xl-4">
			<div class="card">
				<div class="row">
					<div class="col-4">
						<div class="feature">
							<div class="fa-stack fa-lg fa-2x icon bg-danger">
								<i class="fa fa-frown-o fa-stack-1x text-white"></i>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card-body p-3  d-flex">
							<div>
								<p class="text-muted mb-1">Total Meninggal</p>
								<h2 class="mb-0 text-dark">{{ $stats[0]['meninggal'] }}</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- col end -->
	</div>

	<!-- row -->
	<div class="row">
		<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</div>
			</div>
			<div class="card-body">
            	<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th class="wd-15p">#</th>
								<th class="wd-15p">Provinsi</th>
								<th class="wd-20p">Positif</th>
								<th class="wd-15p">Sembuh</th>
								<th class="wd-10p">Meninggal</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 1@endphp
							@foreach($data as $datas)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $datas['attributes']['Provinsi'] }}</td>
								<td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
								<td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
								<td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
            </div>
			<!-- table-wrapper -->
		</div>
		<!-- section-wrapper -->
		</div>
	</div>
	<!-- row end -->
</div>
@endsection
@section('js')
<!-- Data tables js-->
<script src="{!! asset('wecare') !!}/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="{!! asset('wecare') !!}/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="{!! asset('wecare') !!}/plugins/datatable/datatable.js"></script>
<script src="{!! asset('wecare') !!}/plugins/datatable/datatable-2.js"></script>
<script src="{!! asset('wecare') !!}/plugins/datatable/dataTables.responsive.min.js"></script>
@endsection