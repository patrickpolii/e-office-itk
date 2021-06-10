@extends('/unit_kerja/layouts/main')
@section('dashboard')
		@if (Session::has('success'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				{{Session::get('success')}}
			</div>
		@endif
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Permohonan Surat
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Permohonan pembuatan surat mahasiswa.</p>
                        <a href=" {{url('/unit_kerja/pengajuan')}} " class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Masuk
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Surat masuk dari internal.</p>
                        <a href="#" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Keluar
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Surat keluar.</p>
                        <a href="#" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
@endsection

