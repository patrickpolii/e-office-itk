@extends('layouts.main')
@section('detailtatanaskahFilekeluar')
<div class="card">
    <div class="card-body">
        <h2>Detail Tata Naskah File</h2>
        @if(\Session::get('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <br>
        <div class="form-group">
            <table id="list" width="100%">
                <thead>
                    <td colspan="2"><label for="users">Unit Yang Mengajukan</label></td>
                    <td colspan="2"><label for="jenisnaskah">Jenis Tata Naskah</label></td>
                </thead>
                <tr>
                    <td></td>
                    <td><input type="text" name="nama" value=" {{$surat_keluar->users['name']}}" class="form-control" readonly></td>
                    <td><input type="text" name="tatanaskah" value="{{$surat_keluar->jenis_tata_naskah}}" class="form-control" readonly></td> 
                </tr> 
            </table>
        </div>
        <div class="form-group">
            <table id="list" width="100%">
                <thead>
                    <td colspan="2"><label for="keperluan">Keperluan</label></td>
                    <td colspan="2"><label for="penandatangan">Pejabat Penandatangan</label></td>
                </thead>
                <tr>
                    <td></td>
                    <td><input type="text" name="keperluan" value="{{$surat_keluar->keperluan_tata_naskah}}"  class="form-control" readonly></td>
                    <td><input type="text" name="tandatangan" value="{{$surat_keluar->pejabat_penandatangan}}" class="form-control" readonly></td> 
                </tr> 
            </table>
        </div>
        <div class="form-row">
            <label for="tujuan">File Surat</label>
                <input type="text" name="tandatangan" value="{{$surat_keluar->tata_naskah_file}}" class="form-control" readonly>
              <br>      
        </div>
        {!! Form::model($surat_keluar, [
            'route'  => [ 'tata_naskah.update', $surat_keluar->id ],
            'method' => 'put',
            'files'  => true
          ])
        !!}
            <div class="form-group col-md-6">
                <label for="tujuan">No Tata Naskah</label>
                    <input type="text" name="no_tata_naskah" value="" class="form-control" required>
            </div>
        <div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{url($surat_keluar->tata_naskah_file)}}" class="btn btn-success form-control" download><b>Download Draft Tata Naskah </b></a>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <label for="tata_naskah_file">Upload Tata Naskah )</label>
                <input type="file" class="form-control" name="tata_naskah_file" id="tata_naskah_file">
            </div>
        </div>
        <br>
        <div class="row">
            @if ($surat_keluar->status_tata_naskah == 2)
                <div class="col-sm-8">
                    <a href={{route('sekretariat.TtdWR')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                     
                <div class="col-sm-2" style="text-align: right">
                    <button type="submit" class="btn btn-success">Kirim Naskah</button>
                </div>
                         
            @elseif ($surat_keluar->status_tata_naskah == 4)
                <div class="col-sm-8">
                    <a href={{route('sekretariat.TtdRektor')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2" style="text-align: right">
                    <button type="submit" class="btn btn-success">Kirim Naskah</button>
                </div>
            @endif        
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
