@extends('mahasiswa.layouts.main')
@section('class', 'Status Surat')
@section('title', 'Status Surat')

@section('container')
<div class="container">
    <div class="container">
        <div class="col-md-10">
            <h3 class="mt-3">Daftar Pengajuan Surat</h3>
            @if($surat)
            <table id="dataTable" class="table table-striped table-bordered" class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Status Surat</th>
                    <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($surat as $surat)
                    <?php $no++ ;?>
                        <tr>
                        <th>{{ $no }}</th>
                        <td> {{$surat->nama_surat }} </td>
                        <td>
                            @if($surat->status_surat == 0)
                                <p class="bg-primary text-white">Pengajuan</p>
                            @elseif($surat->status_surat == 1)
                                <p class="bg-info text-white">Verifikasi oleh Akademik</p>
                            @elseif($surat->status_surat == 2)
                                <p  class="bg-success text-white">Cetak oleh Akademik</p>
                            @elseif($surat->status_surat == 3)
                                <p class="bg-danger text-white">Ditolak oleh Akademik</p>
                            @elseif($surat->status_surat == 4)
                                <p class="bg-primary text-white">Diteruskan ke Jurusan</p>
                            @elseif($surat->status_surat == 5)
                                <p class="bg-info text-white">Verifikasi oleh Jurusan</p>
                            @elseif($surat->status_surat == 6)
                                <p class="bg-success text-white">Cetak oleh Jurusan</p>
                            @elseif($surat->status_surat == 7)
                                <p class="bg-danger text-white">Ditolak oleh Jurusan</p>
                            @endif
                        </td>
                        <td> {{$surat->updated_at}} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h3>Pengajuan surat belum dilakukan</h3>
            @endif

        </div>
    </div> 
</div>
@endsection