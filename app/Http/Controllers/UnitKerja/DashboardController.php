<?php

namespace App\Http\Controllers\UnitKerja;

use App\Http\Controllers\Controller;
use App\Surat;
use App\Mahasiswa;
use App\User;
use App\Prodi;
use App\Jurusan;
use App\JenisSurat;
use Auth;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view ('unit_kerja.dashboard');
    }

    public function index()
    {
        $jurusan = Auth::user()->name;
        $surat = Surat::where('status_surat', 1)->whereHas('users.mahasiswa.prodi.jurusan', function($q) use ($jurusan){
            $q->where('nama_jurusan', $jurusan);
        })->get();
        return view('unit_kerja.pengajuan', compact('surat'));
        
    }

}
