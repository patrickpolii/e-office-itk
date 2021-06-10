<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use App\Models\E_surat\Mahasiswa;
use App\Models\User;
use App\Models\E_surat\Prodi;
use App\Models\E_surat\Jurusan;
use App\Models\E_surat\Sk_aktif_organisasi;
use App\Models\E_surat\Sk_aktif_studi;
use App\Models\E_surat\Sk_lulus;
use App\Models\E_surat\Sk_pengganti_ktm;
use App\Models\E_surat\Sk_pernah_studi;
use App\Models\E_surat\Sp_magang;
use App\Models\E_surat\Surat_rekomendasi_beasiswa;
use Auth;

class StatusController extends Controller
{
    public function status_surat()
    {
        $surat = Surat::where('id_users', Auth::user()->id)->get();
        return view('mahasiswa.status', compact('surat'));
    }

}
