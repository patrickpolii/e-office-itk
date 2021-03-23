@extends('/mahasiswa/layouts/main')
@section('class', 'Buat Surat/SK Aktif Studi')
	@section('container')	
	<div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Membuat Surat Keterangan Aktif Studi</h1>
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="NIM">NIM </label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi </label>
                            <input type="text" class="form-control" id="prodi" placeholder="Masukan Prodi" name="Prodi">
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan Pemohon </label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan" name="keperluan">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="semester">SEMESTER</label>
                                    <select name="semester" id="semester" class="form-control">
                                        <option value="1">GANJIL</option>
                                        <option value="2">GENAP</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun">TAHUN AJARAN</label>
                                    <select name="tahun" id="semester" class="form-control">
                                        <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                                        <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                                    </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
		</div>
		@endsection
        