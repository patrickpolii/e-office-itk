@extends('/unit_kerja/layouts/main')
@section('tolak')
<div class="tolak">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-3">Daftar Surat Ditolak</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jenis Surat</th>
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
                        <td>
                            <a href="{{ route ('jurusan.detail', $surat->id) }}"class="badge badge-success">details</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div> 
</div>
@endsection
	