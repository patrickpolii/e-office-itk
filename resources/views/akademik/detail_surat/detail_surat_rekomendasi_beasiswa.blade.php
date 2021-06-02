@extends('/akademik/layouts/main')
@section('pengajuan')
<div class="card">
    <div class="card-body">
        <h2><center>Detail Pengajuan Surat Mahasiswa</center></h2>
        @if(\Session::get('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <div class="form-group">
            <table id="list" width="100%">
                <thead>
                    <td colspan="3"><label for="mahasiswa">DATA PEMOHON</label></td>
                </thead>
                <tr>
                    <td></td>
                    <td><input type="text" maxlength="8" name="nim" value=" {{$surat->users->mahasiswa['nim'] }}" class="form-control" readonly></td>
                    <td><input type="text" name="nama" value="{{$surat->users['name'] }}" class="form-control" readonly></td>
                    <td><input type="text" name="prodi" value=" {{$surat->users->mahasiswa->prodi['nama_prodi'] }} " class="form-control" readonly></td>  
                </tr> 
            </table>
        <div class="form-group">
            <label for="keperluan">KEPERLUAN</label><br>
                <input type="text" name="keperluan" value="{{$surat->surat_rekomendasi_beasiswa->nama_beasiswa}}" class="form-control" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tujuan">NAMA SURAT</label>
                    <input type="text" name="tujuan" value="{{$surat->nama_surat}}" class="form-control" readonly>
            </div>
        </div>
        <br>
       
        <div class="row">
            @if ($surat->status_surat == 0)
                <div class="col-sm-8">
                    <a href={{route('akademik.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{route('ditolak.surat', $surat->id)}}" class="btn btn-danger form-control"><b>Tolak</b></a>
                </div>
                <div class="col-sm-2" style="text-align: right">
                    <a href="{{route('verifikasi.surat', $surat->id)}}" class="btn btn-success form-control"><b>Verifikasi</b></a>
                </div>
            @elseif ($surat->status_surat == 1)
                <div class="col-sm-8">
                    <a href={{route('akademik.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
            @elseif ($surat->status_surat == 2)
                <div class="col-sm-8">
                    <a href={{route('akademik.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{route('cetak.surat', $surat->id)}}" class="btn btn-success form-control"><b>Cetak</b></a>
                </div>
            @elseif ($surat->status_surat == 3)
                <div class="col-sm-8">
                    <a href={{route('akademik.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
