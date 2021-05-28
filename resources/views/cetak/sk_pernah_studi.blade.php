@extends('cetak.layout.app')

@section('content')



    <!-- No Surat -->
    <div class="text-center">
        <br><b>SURAT KETERANGAN AKTIF STUDI</b><br>
        Nomor : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/IT10.C.1/AK.05/{{date('Y')}}
    </div>
    <br><br>
    <!-- END No Surat -->
    
    <!-- BODY SURAT -->
    <div class="row">
        <div class="col text-justify">
            Yang bertanda tangan dibawah ini: 
        </div>
    </div>
    <br><br>

    <!-- DATA KASUBBAG AKADEMIK-->
    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:10%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">Aries Rohiyanto</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>197004211998021001</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>Kasubbag Akademik dan Kemahasiswaan ITK</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Menerangkan dengan sebenarnya nama di bawah ini:
        </div>
    </div>
    <br><br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row">
        <div class="col">
            <table width="100%">

                <tr>
                    <td style="width:10%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">{{$surat->users['name']}}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa['nim']}}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa->prodi['nama_prodi']}}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa->prodi->jurusan['nama_jurusan']}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            Adalah mahasiswa yang pernah studi di Institut Teknologi Kalimantan mulai semester {{$surat->sk_pernah_studi->semester_awal}} Tahun Akademik {{$surat->sk_pernah_studi->tahun_akademik_awal}} s/d semester {{$surat->sk_pernah_studi->semester_akhir}}Tahun Akademik {$surat->sk_pernah_studi->tahun_akademik_akhir}.
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col text-justify">
            Demikian surat keterangan ini dibuat untuk dipergunakan sebagai {{$surat->sk_pernah_studi->keperluan}}.
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col justify-content-end">
            <table width="280px" align="right">
                <tr>
                    <td>
                        Balikpapan, {{$tanggal}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>



@endsection