<?php

namespace App\Http\Controllers\UnitKerja\TendikJurusan;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use App\Models\E_surat\Mahasiswa;
use App\User;
use App\Models\E_surat\Prodi;
use App\Models\E_surat\Jurusan;
use Auth;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view ('unit_kerja.tendik_jurusan.dashboard');
    }

    

}
