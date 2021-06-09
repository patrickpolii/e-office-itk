@extends('mahasiswa.layouts.main')
@section('class', 'Buat Surat / SK Lulus')
	@section('container')	
	<div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form action="{{ route('skLulus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                        <input type="hidden" name="status_surat" value="{{ 0 }}">
                        <input type="hidden" name="nama_surat" value="{{ 'SK Lulus' }}">
                        <div class="form-group">
                            <label for="keperluan">Keperluan </label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan" name="keperluan" required>
                        </div>
                        <div class="form-group">
                            <label for="akreditasi_prodi">Akreditasi Institut </label>
                            <input type="text" class="form-control" id="akreditasi_institut" placeholder="Masukan akreditasi program studi" name="akreditasi_institut" required>
                        </div>
                        <div class="form-row">
                            <label for="tanggal_yudisium">Tanggal Yudisium</label>
                                <input type="text" name="tanggal_yudisium" id="tanggal_yudisium" class="form-control" required>
                                <small id="tanggal_yudisium" class="form-text text-muted">Contoh format: (dd-mm-yy) 31-10-2021</small>      
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
		</div>
		@endsection
        