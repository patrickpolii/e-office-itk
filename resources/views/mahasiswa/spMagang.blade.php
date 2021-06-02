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
            <form action="{{ route('spMagang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                <input type="hidden" name="status_surat" value="{{ 0 }}">
                <input type="hidden" name="nama_surat" value="{{ 'Surat Pengantar Magang' }}">
                <div class="form-group">
                    <label for="tujuan"> Tujuan Tempat Magang </label>
                    <input type="text" class="form-control" id="tujuan" placeholder="Masukan tempat tujuan magang" name="tujuan" required>
                </div>
                <div class="form-group">
                    <label for="dosen_pembimbing">Dosen Pembimbing </label>
                    <input type="text" class="form-control" id="dosen_pembimbing" placeholder="Masukan nama dosen pembimbing" name="dosen_pembimbing" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai </label>
                    <input type="text" class="form-control" id="tanggal_mulai" placeholder="Masukan tanggal mulai magang (dd/mm/yyyy)" name="tanggal_mulai" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai </label>
                    <input type="text" class="form-control" id="tanggal_selesai" placeholder="Masukan tanggal selesai magang (dd/mm/yyyy)" name="tanggal_selesai" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
	@endsection
        