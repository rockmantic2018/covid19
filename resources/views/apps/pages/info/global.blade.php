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
			<li class="breadcrumb-item active" aria-current="page">Global</li>
		</ol><!-- End breadcrumb -->
	</div>
	<!-- End page-header -->

	<div class="row">
		<div class="col-md-12 col-xl-4 col-lg-6">
			<div class="card text-center bg-gradient-info text-white">
				<div class="card-body"> <h5>Total Positif</h5>
				  <h3 class="display-5 mb-1 mt-1">{{ $posi['value'] }}</h3>
				  <div>Orang</div>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-md-12 col-xl-4 col-lg-6">
			<div class="card text-center bg-gradient-success text-white">
				<div class="card-body"> <h5>Total Sembuh</h5>
				  <h3 class="display-5 mb-1 mt-1">{{ $semb['value'] }}</h3>
				  <div>Orang</div>
				</div>
			</div>
		</div><!-- col end -->
		<div class="col-md-12 col-xl-4 col-lg-6">
			<div class="card text-center bg-gradient-danger text-white">
				<div class="card-body"> <h5>Total Meninggal</h5>
				  <h3 class="display-5 mb-1 mt-1">{{ $meni['value'] }}</h3>
				  <div>Orang</div>
				</div>
			</div>
		</div><!-- col end -->
	</div>

	<!-- row -->
	<div class="row">
		<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Kasus Coronavirus Global (Data by JHU)</div>
			</div>
			<div class="card-body">
            	<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th class="wd-15p">#</th>
								<th class="wd-15p">Negara</th>
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
								<td>{{ $datas['attributes']['Country_Region'] }}</td>
								<td>{{ $datas['attributes']['Confirmed'] }}</td>
								<td>{{ $datas['attributes']['Recovered'] }}</td>
								<td>{{ $datas['attributes']['Deaths'] }}</td>
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