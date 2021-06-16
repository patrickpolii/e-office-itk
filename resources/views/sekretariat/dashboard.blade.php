@extends('layouts.main')
@section('dashboardSR')
		@if (Session::has('success'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				{{Session::get('success')}}
			</div>
		@endif
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Keluar Wakil Rektor
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Surat keluar yang telah disetujui oleh Wakil Rektor.</p>
                        <a href="{{route('sekretariat.TtdWR')}}" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Keluar Rektor
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Surat keluar yang telah disetujui oleh Rektor.</p>
                        <a href="{{route('sekretariat.TtdRektor')}}" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Masuk
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Surat masuk dari Arsiparis.</p>
                        <a href="#" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Disposisi Surat
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Melakukan disposisi surat masuk.</p>
                        <a href="#" class="btn btn-primary">Masuk</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
@endsection

