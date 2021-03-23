@extends('/mahasiswa/layouts/main')
@section('class', 'Buat Surat')
@section('title', 'Buat Surat')
		@section('container')
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Aktif Studi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat aktif studi.</p>
                        <a href="{{ url('/skAktifStudi') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Aktif Organisasi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat aktif organisasi.</p>
                        <a href="{{ url('/skOrganisasi') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Pernah Studi
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan pernah studi.</p>
                        <a href="{{ url('/skStudi') }}" class="btn btn-primary">Buat</a>
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
                        <a href="{{ url('/skKTM') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">SK Lulus
						<span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
                        <p>Membuat surat keterangan telah lulus .</p>
                        <a href="{{ url('/skLulus') }}" class="btn btn-primary">Buat</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		@endsection
	