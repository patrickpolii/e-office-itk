@extends('mahasiswa.layouts.main')
@section('class', 'Status Surat')
@section('title', 'Status Surat')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-3">Daftar Pengajuan Surat</h3>
            @if($surat)
            <table class="table">
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
                            <?php 
                                switch($surat->status_surat){
                                    case 0:
                                        echo "Pengajuan";
                                        break;
                                    case 1;
                                        echo "Verifikasi";
                                        break;
                                    case 2;
                                        echo "Cetak";
                                        break;
                                    case 3;
                                        echo "Ditolak";
                                        break;
                                    case 4;
                                        echo "Diteruskan ke Jurusan";
                                        break;
                                }
                                ?>
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