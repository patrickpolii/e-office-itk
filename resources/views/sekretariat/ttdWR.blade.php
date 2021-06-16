@extends('layouts.main')
@section('ttdWR')
<div class="pengajuan">
    <div class="container">
        <div class="col-md-10">
            <h3 class="mt-3">Daftar Pengajuan Surat ditandatangani Wakil Rektor </h3>
            <table id="dataTable" class="table table-striped table-bordered" class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Tata Naskah</th>
                    <th scope="col">Pejabat Penandatangan</th>
                    <th scope="col">Tanggal Ditandatangani</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($surat_keluar as $surat_keluar)
                    <?php $no++ ;?>
                        <tr>
                        <th>{{ $no }}</th>
                        <td> {{$surat_keluar->users['name'] }} </td>
                        <td> {{$surat_keluar->jenis_tata_naskah }} </td>
                        <td> {{$surat_keluar->pejabat_penandatangan}} </td>
                        <td> {{$surat_keluar->updated_at}} </td>
                        <td>
                            <a href="{{ route ('naskah.detail', $surat_keluar->id) }}"class="badge badge-success">details</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div> 
</div>
@endsection
	