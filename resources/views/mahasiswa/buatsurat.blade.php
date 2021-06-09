@extends('mahasiswa.layouts.main')
@section('class', 'Buat Surat')
@section('title', 'Buat Surat')
		@section('container')
		@if (Session::has('success'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				{{Session::get('success')}}
			</div>
		@endif
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Aktif Studi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat aktif studi.</p>
                        <a href="{{ route('skAktifStudi.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Aktif Organisasi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat aktif organisasi.</p>
                        <a href="{{ route('skOrganisasi.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Pernah Studi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan pernah studi.</p>
                        <a href="{{ route('skStudi.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
			
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Pengganti KTM
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan pengganti KTM.</p>
                        <a href="{{ route('skKTM.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Lulus
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan telah lulus .</p>
                        <a href="{{ route('skLulus.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Permohonan Data
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat permohonan data .</p>
                        <a href="{{ url('/skLulus') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Rekomendasi Beasiswa
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat rekomendasi beasiswa.</p>
                        <a href="{{ route('srBeasiswa.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Pengantar Magang
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat  pengantar magang .</p>
                        <a href="{{ route('spMagang.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Surat Perjalanan
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat perjalanan .</p>
                        <a href="{{ url('/sPerjalanan') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Melaksanakan TA
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan sedang melaksanakan TA.</p>
                        <a href="{{ route('srBeasiswa.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Peminjaman
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat  permohonan peminjaman .</p>
                        <a href="{{ route('spMagang.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SP-MMTA
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat SP-MMTA .</p>
                        <a href="{{ url('/sPerjalanan') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Pengantar Proposal KP
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat pengantar proposal KP.</p>
                        <a href="{{ route('srBeasiswa.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Pengantar KP
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat  pengantar KP .</p>
                        <a href="{{ route('spMagang.create') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Melanjutkan Penelitian
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat melanjutkan penelitian .</p>
                        <a href="{{ url('/sPerjalanan') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		@endsection
	