<?php

namespace App\Http\Controllers\Mahasiswa;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function surat_rekomendasi_beasiswa_create()
    {
        return view('mahasiswa.suratBeasiswa');
    }

    public function sp_magang_create()
    {
        return view('mahasiswa.spMagang');
    }

    public function sp_kp_create()
    {
        return view('mahasiswa.spKP');
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
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_aktif_studi::create($data);
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
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_pengganti_ktm::create($data);
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
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_pernah_studi::create($data);
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
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_aktif_organisasi::create($data);
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
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sk_lulus::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function surat_rekomendasi_beasiswa_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Surat_rekomendasi_beasiswa::create($data);
        return redirect()->route('buat.surat')->withSuccess('Permohonan surat berhasil dibuat');
    }

    public function sp_magang_store(Request $request)
    {
        $data = $request->all();
        $surat = Surat::create($data);

        // fungsi insert child
        $data['id_surat'] = $surat->id;
        $create = Sp_magang::create($data);
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
