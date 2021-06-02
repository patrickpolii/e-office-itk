@extends('/mahasiswa/layouts/main')
	@section('container')	
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
            <form action="{{ route('srBeasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                <input type="hidden" name="status_surat" value="{{ 0 }}">
                <input type="hidden" name="nama_surat" value="{{ 'Surat Rekomendasi Beasiswa' }}">
                <div class="form-group">
                    <label for="nama_beasiswa">Nama beasiswa </label>
                    <input type="text" class="form-control" id="nama_beasiswa" placeholder="Masukan nama beasiswa" name="nama_beasiswa" required>
                </div>
                <div class="form-group">
                    <label for="semester">Semester </label>
                    <input type="text" class="form-control" id="semester" placeholder="Masukan semester yang saat ini ditempuh" name="semester" required>
                </div>
                <div class="form-group">
                    <label for="ipk">IPK </label>
                    <input type="text" class="form-control" id="ipk" placeholder="Masukan IPK" name="ipk" required>
                </div>
                <div class="form-group">
                    <label for="sks_lulus">SKS lulus </label>
                    <input type="text" class="form-control" id="sks_lulus" placeholder="Masukan SKS lulus" name="sks_lulus" required>
                </div>
                <div class="form-group">
                    <label for="golongan_ukt">Golongan UKT </label>
                    <input type="text" class="form-control" id="golongan_ukt" placeholder="Masukan golongan UKT" name="golongan_ukt" required>
                </div>
                <div class="form-group">
                    <label for="besar_ukt">Besar UKT </label>
                    <input type="text" class="form-control" id="besar_ukt" placeholder="Masukan besaran UKT (dalam rupiah)" name="besar_ukt" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
	@endsection
        