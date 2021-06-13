@extends('layouts.main')
@section('class', 'Kirim Surat ')
	@section('kirimsurat')	
	<div class="container">
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
            <form action="{{ route('suratkeluar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
                <input type="hidden" name="status_tata_naskah" value="{{ 1 }}">
                <div class="form-group">
                    <label for="jenis"> Jenis Tata Naskah </label>
                    <input type="text" class="form-control" id="jenis_tata_naskah" placeholder="Masukan jenis tata naskah yang dikirimkan" name="jenis_tata_naskah" required>
                </div>
                <div class="form-group">
                    <label for="keperluan"> Keperluan Tata Naskah </label>
                    <input type="text" class="form-control" id="keperluan_tata_naskah" placeholder="Masukan keperluan tata naskah yang dikirimkan" name="keperluan_tata_naskah" required>
                </div>
                <div class="form-group">
                    <label for="penandatangan">Pejabat Penandatangan </label>
                        <select name="pejabat_penandatangan" id="penandatangan" class="form-control" required>
                            <option value="Rektor">Rektor</option>
                            <option value="Wakil Rektor">Wakil Rektor</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="tata_naskah_ck">Draft Surat ( silahkan membuat jika belum memiliki file draft) </label>
                    <textarea name="tata_naskah_ck" id="editor1" cols="30" rows="10"></textarea>
                </div>
                    
                <div class="form-group">
                    <label for="tata_naskah_file">Draft Surat (file)</label>
                    <input type="file" class="form-control" name="tata_naskah_file" id="inputGroupFile02">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
	@endsection
    @section('script')
    <script>
        CKEDITOR.replace( 'editor1' );
      </script>
    @endsection
        