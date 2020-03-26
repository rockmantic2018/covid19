<div class="horizontal-main hor-menu clearfix">
	<div class="horizontal-mainwrapper container clearfix">
		<nav class="horizontalMenu clearfix">
			<ul class="horizontalMenu-list">
				<li aria-haspopup="true"><a class="{{ Request::segment(1) == '' ? "active": "" }}" href="{{ route('index') }}" class="">Beranda</a></li>
				<li aria-haspopup="true"><a href="#" class="sub-icon {{ Request::segment(1) == 'info' ? "active": "" }}">Statistik <i class="fa fa-angle-down horizontal-icon"></i></a>
					<ul class="sub-menu">
						<li aria-haspopup="true"><a href="{{ route('info.id') }}">Indonesia</a></li>
						<li aria-haspopup="true"><a href="{{ route('info.global') }}">Global</a></li>
					</ul>
				</li>
				<li aria-haspopup="true"><a class="{{ Request::segment(1) == 'hotline' ? "active": "" }}" href="{{ route('line') }}" class="">Hotline Corona</a></li>
				<li aria-haspopup="true">
					<a href="#" class="sub-icon">Link <i class="fa fa-angle-down horizontal-icon"></i></a>
					<ul class="sub-menu">
						<li aria-haspopup="true"><a target="_blank" href="https://covid19.acehprov.go.id/halaman/peta-sebaran">Peta Sebaran</a></li>
						<li aria-haspopup="true"><a target="_blank" href="https://covid19.acehprov.go.id">Rumah Sakit Rujukan</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!--Nav end -->
	</div>
</div>