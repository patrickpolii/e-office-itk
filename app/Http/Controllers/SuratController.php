<?php

namespace App\Http\Controllers;

use App\Surat;
use App\Mahasiswa;
use App\User;
use App\Prodi;
use App\Jurusan;
use App\JenisSurat;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sk_aktif_studi_create()
    {
        return view('mahasiswa.skAktifStudi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_aktif_studi_store(Request $request)
    {
        //Validasi Form Lapor
        $this->validate($request, [
            'akreditasi_prodi' => 'required',
            'tujuan_surat' => 'required',
            'keperluan' => 'required',
            'semester'=> 'required',
            'tahun_akademik' => 'required',

        ]);

        $surat = New Surat;
        
        //Create Isi surat
        $surat->id_jenis_surat = '1';
        $surat->semester = $request->semester;
        $surat->id_users = auth()->id();
        $surat->keperluan = $request->keperluan;
        $surat->akreditasi_prodi = $request->akreditasi_prodi;
        $surat->tujuan_surat = $request->tujuan_surat;
        $surat->tahun_akademik = $request->tahun_akademik;
        $surat->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
