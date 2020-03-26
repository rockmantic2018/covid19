<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>

		<!-- Favicon -->
		<link rel="icon" href="{!! asset('uploads') !!}/icon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{!! asset('uploads') !!}/icon.png" />

		<!-- Title -->
		<title>POLTAS Care – Pusat Informasi Covid19 Politeknik Aceh Selatan</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{!! asset('wecare') !!}/plugins/bootstrap/css/bootstrap.min.css">

		<!-- Dashboard css -->
		<link href="{!! asset('wecare') !!}/css/style.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{!! asset('wecare') !!}/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Horizontal-menu css -->
		<link href="{!! asset('wecare') !!}/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
		<link href="{!! asset('wecare') !!}/plugins/horizontal-menu/horizontalmenu.css" rel="stylesheet">

		<!--Daterangepicker css-->
		<link href="{!! asset('wecare') !!}/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

		<!-- Rightsidebar css -->
		<link href="{!! asset('wecare') !!}/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Sidebar Accordions css -->
		<link href="{!! asset('wecare') !!}/plugins/accordion1/css/easy-responsive-tabs.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="{!! asset('wecare') !!}/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!-- Morris  Charts css-->
		<link href="{!! asset('wecare') !!}/plugins/morris/morris.css" rel="stylesheet" />

		<!---Font icons css-->
		<link href="{!! asset('wecare') !!}/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<link href="{!! asset('wecare') !!}/plugins/iconfonts/icons.css" rel="stylesheet" />
		<link  href="{!! asset('wecare') !!}/fonts/fonts/font-awesome.min.css" rel="stylesheet">

		@yield('css')

	</head>

	<body class="app sidebar-mini rtl">

		<!--Global-Loader-->
		<div id="global-loader">
			<img src="{!! asset('wecare') !!}/images/icons/loader.svg" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!--app-header-->
				@include('apps.layouts.header')
				<!--app-header end-->

				<!-- Horizontal-menu -->
				@include('apps.layouts.menubar')
				<!-- Horizontal-menu end -->

				<!--Header submenu -->
				<div class="bg-white p-3 header-secondary header-submenu">
					<div class="container ">
						<div class="row">
							<div class="col col-auto">
								<a target="_blank" class="btn btn-success mt-4 mt-sm-0" href="https://api.whatsapp.com/send?phone=6281133399000&text=hi"><i class="fe fe-whatsapp mr-1 mt-1"></i> Whatsapp BOT (COVID19.GO.ID)</a>
							</div>
						</div>
					</div>
				</div><!--End Header submenu -->

                <!-- app-content-->
				<div class="container content-area">
					
					{{-- content --}}
					@yield('content')
					{{-- content --}}

					<!--End side app-->

					<!-- Right-sidebar-->
					@include('apps.layouts.rightbar')
					<!-- End Rightsidebar-->

					<!--footer-->
					@include('apps.layouts.footer')
					<!-- End Footer-->

				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Jquery js-->
		<script src="{!! asset('wecare') !!}/js/vendors/jquery-3.2.1.min.js"></script>

		<!--Bootstrap.min js-->
		<script src="{!! asset('wecare') !!}/plugins/bootstrap/popper.min.js"></script>
		<script src="{!! asset('wecare') !!}/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery Sparkline js-->
		<script src="{!! asset('wecare') !!}/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Chart Circle js-->
		<script src="{!! asset('wecare') !!}/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating js-->
		<script src="{!! asset('wecare') !!}/plugins/rating/jquery.rating-stars.js"></script>

		<!--Moment js-->
		<script src="{!! asset('wecare') !!}/plugins/moment/moment.min.js"></script>

		<!-- Daterangepicker js-->
		<script src="{!! asset('wecare') !!}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Horizontal-menu js -->
		<script src="{!! asset('wecare') !!}/plugins/horizontal-menu/horizontalmenu.js"></script>

		<!-- Sidebar Accordions js -->
		<script src="{!! asset('wecare') !!}/plugins/accordion1/js/easyResponsiveTabs.js"></script>

		<!-- Custom scroll bar js-->
		<script src="{!! asset('wecare') !!}/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Owl Carousel js -->
		<script src="{!! asset('wecare') !!}/plugins/owl-carousel/owl.carousel.js"></script>
		<script src="{!! asset('wecare') !!}/plugins/owl-carousel/owl-main.js"></script>

		<!-- Rightsidebar js -->
		<script src="{!! asset('wecare') !!}/plugins/sidebar/sidebar.js"></script>

		<!-- Charts js-->
		<script src="{!! asset('wecare') !!}/plugins/chart/chart.bundle.js"></script>
		<script src="{!! asset('wecare') !!}/plugins/chart/utils.js"></script>

		<!--Time Counter js-->
		<script src="{!! asset('wecare') !!}/plugins/counters/jquery.missofis-countdown.js"></script>
		<script src="{!! asset('wecare') !!}/plugins/counters/counter.js"></script>

		<!--Morris  Charts js-->
		<script src="{!! asset('wecare') !!}/plugins/morris/raphael-min.js"></script>
		<script src="{!! asset('wecare') !!}/plugins/morris/morris.js"></script>

		<!-- Custom-charts js-->
		<script src="{!! asset('wecare') !!}/js/index1.js"></script>
		@yield('js')
		<!-- Custom js-->
		<script src="{!! asset('wecare') !!}/js/custom.js"></script>
	</body>
</html>