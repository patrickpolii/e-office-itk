<?php

namespace App\Http\Controllers\UnitKerja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\E_office\Surat_keluar;
use App\User;
use Auth;

class TataNaskahController extends Controller
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
    public function SuratKeluar_create()
    {
        return view ('unit_kerja.kirimSurat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function SuratKeluar_store(Request $request)
    {
        $data = $request->all();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('tata_naskah_file');

        $tujuan_upload = 'data_file';
        $nama = $file->move($tujuan_upload,$file->getClientOriginalName());
        $data['tata_naskah_file'] = $nama;
        $surat = Surat_keluar::create($data);
        return redirect()->route('unit_kerja.dashboard')->withSuccess('Pengajuan surat berhasil dikirim');
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
