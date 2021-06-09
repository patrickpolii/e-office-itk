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
        $count0 = Surat::where('status_surat', 0)->count();
        $count1 = Surat::where('status_surat', 1)->count();
        $count4 = Surat::where('status_surat', 3)->count();
        $count3 = Surat::where('status_surat', 2)->count();

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

        $label = array();
            $label[0] = 'SK Aktif Organisasi';
            $label[1] = 'SK Aktif Studi';
            $label[2] = 'SK Lulus';
            $label[3] = 'SK Pengganti KTM';
            $label[4] = 'SK Pernah Studi';
        
        foreach($label as $l){
            $pie[]=Surat::where('nama_surat', $l)->count();
        }

        $color = ['#30a5ff', '#ffb53e', '#1ebfae', '#f9243f', '#7715bd'];
        $highlight = ['#62b9fb', '#fac878', '#3cdfce', '#f6495f', '#b64fff'];
        return view ('akademik.dashboard', compact('area','area2', 'tahun', 'count0', 'count1', 'count4', 'count3', 'label', 'pie', 'color', 'highlight'));
    }
}
