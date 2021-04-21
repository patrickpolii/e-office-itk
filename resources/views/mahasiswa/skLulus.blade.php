@extends('mahasiswa.layouts.main')
	@section('container')	
	<div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Membuat Surat Keterangan Lulus</h1>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM </label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan </label>
                            <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
		</div>
		@endsection
        