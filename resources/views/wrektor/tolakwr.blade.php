@extends('layouts.main')
@section('tolakwr')
<div class="pengajuan">
    <div class="container">
        <div class="col-md-10">
            <h3 class="mt-3">Daftar Pengajuan Surat di Tolak </h3>
            <table id="dataTable" class="table table-striped table-bordered" class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Tata Naskah</th>
                    <th scope="col">Pejabat Penandatangan</th>
                    <th scope="col">Tanggal Pengajuan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach ($surat as $surat)
                    <?php $no++ ;?>
                        <tr>
                        <th>{{ $no }}</th>
                        <td> {{$surat->users['name'] }} </td>
                        <td> {{$surat->users->mahasiswa['nim'] }} </td>
                        <td> {{$surat->nama_surat}} </td>
                        <td> {{$surat->created_at}} </td>
                        <td>
                            <a href="{{ route ('akademik.detail', $surat->id) }}"class="badge badge-success">details</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div> 
</div>
@endsection
	