<?php

namespace App\Http\Controllers\Akademik;

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

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $surat = Surat::all();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.dashboard', compact('surat', 'jenis_surat', 'users', 'mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        if ($surat->nama_surat == 'SK Aktif Studi') {
            return view('akademik.detail_surat.detail_sk_aktif_studi',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Aktif Organisasi') {
            return view('akademik.detail_surat.detail_sk_aktif_organisasi',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Lulus') {
            return view('akademik.detail_surat.detail_sk_lulus',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Pengganti KTM') {
            return view('akademik.detail_surat.detail_sk_pengganti_ktm',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Pernah Studi') {
            return view('akademik.detail_surat.detail_sk_pernah_studi',compact('surat'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak($id)
    {
    	$surat = Surat::findOrFail($id);
        $tanggal = Carbon::today()->format('d-m-Y');
        if ($surat->nama_surat == 'SK Aktif Studi') {
            $pdf = PDF::loadview('cetak.sk_aktif_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Aktif Organisasi') {
            $pdf = PDF::loadview('cetak.sk_aktif_organisasi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
    	elseif ($surat->nama_surat == 'SK Pernah Studi') {
            $pdf = PDF::loadview('cetak.sk_pernah_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Lulus') {
            $pdf = PDF::loadview('cetak.sk_lulus',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Pengganti KTM') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
    	return $pdf->download('surat-pdf');
    }
}
