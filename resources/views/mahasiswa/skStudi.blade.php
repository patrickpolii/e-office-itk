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
            <form action="{{ route('skStudi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                <input type="hidden" name="id_jenis_surat" value="{{ 4 }}">
                <div class="form-group">
                    <label for="tujuan_surat">Tujuan Surat </label>
                    <input type="text" class="form-control" id="tujuan_surat" placeholder="Masukan Tujuan Surat" name="tujuan_surat" required>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan </label>
                    <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan" name="keperluan" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="semester_awal">Semester awal</label>
                            <select name="semester_awal" id="semester_awal" class="form-control" required>
                                <option value="Ganjil">GANJIL</option>
                                <option value="Genap">GENAP</option>
                            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="semester_akhir">Semester akhir</label>
                            <select name="semester_akhir" id="semester_akhir" class="form-control" required>
                                <option value="Ganjil">GANJIL</option>
                                <option value="Genap">GENAP</option>
                            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tahun_akademik_awal">Tahun akademik awal</label>
                            <select name="tahun_akademik_awal" id="tahun_akademik_awal" class="form-control" required>
                                <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                                <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                            </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tahun_akademik_akhir">Tahun akademik akhir</label>
                            <select name="tahun_akademik_akhir" id="tahun_akademik_akhir" class="form-control" required>
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
	@endsection
        