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
        $jenis_surat = JenisSurat::all();
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
        $jenis_surat = JenisSurat::all();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.detail',compact('surat', 'jenis_surat', 'users', 'mahasiswa'));
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

    	$pdf = PDF::loadview('cetak.sk',['surat'=>$surat, 'tanggal'=>$tanggal]);
    	return $pdf->download('surat-pdf');
    }
}
