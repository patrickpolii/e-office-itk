@extends('/mahasiswa/layouts/main')
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
                    <form action="{{ route('skKTM.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                        <input type="hidden" name="nama_surat" value="{{ 'sk_pengganti_ktm' }}">
                        <div class="form-group">
                            <label for="keperluan">Keperluan </label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Masukan Keperluan" name="keperluan" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> 
		</div>
		@endsection
        