@extends('/mahasiswa/layouts/main')
@section('class', 'Buat Surat/SK Aktif Studi')
	@section('container')	
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
                    <form action="{{ route('skAktifStudi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                        <input type="hidden" name="status_surat" value="{{ 0 }}">
                        <input type="hidden" name="nama_surat" value="{{ 'SK Aktif Studi' }}">
                        <div class="form-group">
                            <label for="akreditasi_prodi">Akreditasi Program Studi </label>
                            <input type="text" class="form-control" id="akreditasi_prodi" placeholder="Masukan Akreditasi Prodi" name="akreditasi_prodi" required>
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan Pemohon </label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan" name="keperluan" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="semester">SEMESTER</label>
                                    <select name="semester" id="semester" class="form-control" required>
                                        <option value="Ganjil">GANJIL</option>
                                        <option value="Genap">GENAP</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun_akademik">TAHUN AJARAN</label>
                                    <select name="tahun_akademik" id="tahun_akademik" class="form-control" required>
                                        <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                                        <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                                    </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
		</div>
		@endsection
        