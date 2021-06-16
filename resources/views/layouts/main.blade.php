<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Manajemen</span>E-Office</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	@if(Auth::user()->hasRole('wakil_rektor'))
	@include('layouts.sidebarWR')
	@elseif(Auth::user()->hasRole('sekretariat'))
	@include('layouts.sidebarSR')
	@elseif(Auth::user()->hasRole('unit_kerja'))
	@include('layouts.sidebarUnit')
	@endif
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@include('akademik.layouts.navbar')
		@if(Auth::user()->hasRole('wakil_rektor'))
		@yield('dashboardWR')
		@yield('filetatanaskahFilekeluar')
		@yield('paraf')
		@yield('tolakWR')
		@yield('ttdWr')
		@yield('pengajuankeluarWR')

		@elseif(Auth::user()->hasRole('sekretariat'))
		@yield("dashboardSR")
		@yield('ttdWR')
		@yield('ttdRektor')
		@yield('detailtatanaskahFilekeluar')

		@elseif(Auth::user()->hasRole('unit_kerja'))
		@yield('dashboard')
		@yield('kirimsurat')
		@yield('pengajuankeluar')
		@endif
	</div>	<!--/.main-->
	
	
	@include('layouts.scripts')
	@yield('script')
		
</body>
</html>