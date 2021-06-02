<?php

namespace App\Http\Controllers\Akademik;

use Illuminate\Http\Request;
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

class DashboardController extends Controller
{
    public function Dashboard()
    {
        //1
        $count = Surat::count();

        //2
        $bulan = ['01','02','03','04','05','06','07','08','09','10','11','12'];
        foreach ($bulan as $b) {
            $area[]=Surat::where('created_at',  'like', '%' . date('Y') . '-' . $b . '%')->count();
        }

        //3
        $tahun = array();
            $tahun[0] = 2021;
            $tahun[1] = 2022;
            $tahun[2] = 2023;

        foreach($tahun as $t) {
            $area2[]=Surat::where('created_at',  'like', '%' . $t . '-' . '%')->count();
        }
        return view ('akademik.dashboard', compact('area','area2', 'tahun', 'count'));
    }
}
