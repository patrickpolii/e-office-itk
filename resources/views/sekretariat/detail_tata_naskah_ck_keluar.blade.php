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
            <textarea name="tata_naskah_ck" id="editor1" cols="30" rows="10" readonly>
                {{$surat_keluar->tata_naskah_ck}}
            </textarea>
             <br>      
        </div>
        <br>
        <div class="row">
            @if ($surat_keluar->status_tata_naskah == 2)
                <div class="col-sm-8">
                    <a href={{route('wrektor.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                @if($surat_keluar->pejabat_penandatangan == 'Rektor')
                    <div class="col-sm-2" style="text-align: right">
                        <a href="{{route('wr.paraf', $surat_keluar->id)}}" class="btn btn-success form-control"><b>Paraf</b></a>
                    </div>
                @elseif($surat_keluar->pejabat_penandatangan == 'Wakil Rektor')
                    <div class="col-sm-2" style="text-align: right">
                        <a href="{{route('wr.ttd', $surat_keluar->id)}}" class="btn btn-success form-control"><b>Tanda tangan</b></a>
                    </div>
                @endif         
            @elseif ($surat_keluar->status_tata_naskah == 0)
                <div class="col-sm-8">
                    <a href={{route('tolak.wr')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
            @elseif ($surat->status_tata_naskah == 2)
                <div class="col-sm-8">
                    <a href={{route('ttd.wr')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
            @elseif ($surat->status_tata_naskah == 3)
                <div class="col-sm-8">
                    <a href={{route('paraf.wr')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>   
            @endif        
        </div>
    </div>
</div>

@endsection
 @section('script')
    <script>
        CKEDITOR.replace( 'editor1' );
      </script>
    @endsection
