@extends('/unit_kerja/layouts/main')
@section('pengajuan')
<div class="card">
    <div class="card-body">
        <h2><center>Detail Surat Pengantar Magang</center></h2>
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
                <input type="text" name="keperluan" value="{{$surat->sp_magang->tujuan}}" class="form-control" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tujuan">NAMA SURAT</label>
                    <input type="text" name="tujuan" value="{{$surat->nama_surat}}" class="form-control" readonly>
            </div>
            @if($surat->status_surat == 5)
            <form action="{{ route('jurusancetak.surat', $surat->id) }}" method="PUT" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label for="tujuan">No SURAT</label>
                    <input type="text" name="no_surat" value="" class="form-control" required>
            </div>
            @endif
        </div>
        <br>
       
        <div class="row">
            @if ($surat->status_surat == 4)
                <div class="col-sm-8">
                    <a href={{route('jurusan.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger form-control" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><b>Tolak</b></button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Masukan Keterangan Surat Ditolak</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action ="{{route('jurusantolak.surat', $surat->id)}}" method="PUT">
                                @csrf
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Keterangan:</label>
                                  <textarea class="form-control" name="keterangan_surat" id="message-text"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim keterangan</button>
                                  </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>      
                </div>
                <div class="col-sm-2" style="text-align: right">
                    <a href="{{route('jurusanverifikasi.surat', $surat->id)}}" class="btn btn-success form-control"><b>Verifikasi</b></a>
                </div>
            @elseif ($surat->status_surat == 5)
                <div class="col-sm-8">
                    <a href={{route('jurusan.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2" style="text-align: right">
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div>
            @elseif ($surat->status_surat == 6 )
                <div class="col-sm-8">
                    <a href={{route('jurusan.cetak')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{route('jurusancetak.surat', $surat->id)}}" class="btn btn-success form-control"><b>Cetak</b></a>
                </div>
            @elseif ($surat->status_surat == 7 )
                <div class="col-sm-8">
                    <a href={{route('jurusan.tolak')}} class="btn btn-primary"><b><- Kembali</b></a>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
