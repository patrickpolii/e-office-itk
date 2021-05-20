@extends('cetak.layout.app')

@section('content')



    <!-- No Surat -->
    <div class="text-center">
        <br><b>SURAT KETERANGAN</b><br>
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
            @if($surat->id_jenis_surat == 1)
            Menerangkan dengan sebenarnya bahwa sampai dengan semester 
            tahun akademik {{$surat->tahun_akademik}}, yang tersebut dibawah ini adalah Mahasiswa aktif 
            mengikuti perkuliahan di Institut Teknologi Kalimantan (ITK) :
            @elseif($surat->id_jenis_surat == 2)

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
                    <td>Prodi</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa->prodi['nama_prodi']}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            Demikian surat keterangan ini dibuat untuk dipergunakan sebagai {{$surat->keperluan}}.
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