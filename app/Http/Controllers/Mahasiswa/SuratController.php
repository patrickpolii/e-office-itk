<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sk_ktm_create()
    {
        return view('mahasiswa.skKTM');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sk_lulus_create()
    {
        return view('mahasiswa.skLulus');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sk_organisasi_create()
    {
        return view('mahasiswa.skOrganisasi');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sk_studi_create()
    {
        return view('mahasiswa.skStudi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_aktif_studi_store(Request $request)
    {
        $data = $request->all();
        $create = Surat::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_pengganti_ktm_store(Request $request)
    {
        $data = $request->all();
        $create = Surat::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_pernah_studi_store(Request $request)
    {
        $data = $request->all();
        $create = Surat::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_aktif_organisasi_store(Request $request)
    {
        $data = $request->all();
        $create = Surat::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sk_lulus_store(Request $request)
    {
        $data = $request->all();
        $create = Surat::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
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
