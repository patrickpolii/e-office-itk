<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surat;
use App\Mahasiswa;
use App\User;
use App\Prodi;
use App\Jurusan;
use App\Sk_aktif_organisasi;
use App\Sk_aktif_studi;
use App\Sk_lulus;
use App\Sk_pengganti_ktm;
use App\Sk_pernah_studi;
use App\Sp_magang;
use App\Surat_rekomendasi_beasiswa;
use Auth;

class StatusController extends Controller
{
    public function status_surat()
    {
        $surat = Surat::where('id_users', Auth::user()->id)->get();
        return view('mahasiswa.status', compact('surat'));
    }

}
