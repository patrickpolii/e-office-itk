@extends('layouts.main')
@section('detailtatanaskahFilekeluar')
<div class="card">
    <div class="card-body">
        <h2><center>Detail Tata Naskah File </center></h2>
        @if(\Session::get('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success')}}</p>
        </div>
        @endif
        <div class="form-group">
            <table id="list" width="100%">
                <thead>
                    <td colspan="2"><label for="mahasiswa">Data Pengajuan</label></td>
                </thead>
                <tr>
                    <td></td>
                    <td><input type="text" maxlength="8" name="nama" value=" {{$surat_keluar->users['name']}}" class="form-control" readonly></td>
                    <td><input type="text" name="tatanaskah" value="{{$surat_keluar->jenis_tata_naskah}}" class="form-control" readonly></td> 
                </tr> 
            </table>
        <div class="form-group">
            <label for="keperluan">KEPERLUAN</label><br>
                <input type="text" name="keperluan" value="{{$surat_keluar->keperluan_tata_naskah}}" class="form-control" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tujuan">Penandatangan</label>
                    <input type="text" name="tandatangan" value="{{$surat_keluar->pejabat_penandatangan}}" class="form-control" readonly>
            </div>
        </div>
        <br>
        <div class="col-sm-8">
            <a href="{{url($surat_keluar->tata_naskah_file)}}" target="_blank" class="btn btn-primary"><b><- Lihat</b></a>
        </div>
        <div class="row">
            @if ($surat_keluar->status_tata_naskah == 1)
                <div class="col-sm-8">
                    <a href={{route('wrektor.pengajuan')}} class="btn btn-primary"><b><- Kembali</b></a>
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
                              <form action ="{{route('wr.tolak', $surat_keluar->id)}}" method="PUT">
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
