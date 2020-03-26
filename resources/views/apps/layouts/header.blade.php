<div class="app-header header hor-topheader d-flex">
	<div class="container">
		<div class="d-flex">
			<a class="header-brand header-brand1" href="{{ url('/') }}">
				<img src="{!! asset('uploads') !!}/logo.png" class="header-brand-img main-logo mobile-logo" alt="Hogo logo">
				<img src="{!! asset('uploads') !!}/icon.png" class="header-brand-img icon-logo " alt="Hogo logo">
			</a><!-- logo-->
			<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
			<ul class="nav header-nav">
				<li class="nav-item dropdown header-option m-2">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fe fe-settings mr-2"></i>Link Terkait
					</a>
					<div class="dropdown-menu dropdown-menu-left">
						<a target="_blank" class="dropdown-item" href="https://poltas.ac.id/">POLTAS</a>
						<a target="_blank" class="dropdown-item" href="https://kawalcorona.com/">Kawal Corona API</a>
						<a target="_blank" class="dropdown-item" href="https://covid19.acehprov.go.id/">Covid-19 Provinsi Aceh</a>
						<a target="_blank" class="dropdown-item" href="https://www.covid19.go.id/situasi-virus-corona/">Covid-19 Nasional</a>
						<a target="_blank" class="dropdown-item" href="https://www.worldometers.info/coronavirus/">Covid-19 Dunia</a>
					</div>
				</li>
			</ul>
			<a class="header-brand header-brand2 d-none d-lg-block  align-items-center justify-content-center" href="{{ url('/') }}">
				<img src="{!! asset('uploads') !!}/logo.png" class="header-brand-img main-logo" alt="Hogo logo">
			</a><!-- logo-->
			<div class="d-flex order-lg-2  header-rightmenu">
				<div class="dropdown">
					<a  class="nav-link icon full-screen-link" id="fullscreen-button">
						<i class="fe fe-maximize-2"></i>
					</a>
				</div><!-- full-screen -->
				<div class="dropdown">
					<a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
						<i class="fe fe-more-horizontal"></i>
					</a>
				</div><!-- Right-siebar-->
			</div>
		</div>
	</div>
</div>