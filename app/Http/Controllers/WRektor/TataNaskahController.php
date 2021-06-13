<?php

namespace App\Http\Controllers\WRektor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\E_office\Surat_keluar;
use App\User;
use Auth;
use PDF;

class TataNaskahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_keluar = Surat_keluar::where('status_tata_naskah', 1)->get();
        $users = User::all();
        return view('wrektor.pengajuankeluar', compact('surat_keluar', 'users'));
    }

    public function indexTolak()
    {
        
        $surat_keluar = Surat_keluar::where('status_tata_naskah', 0)->get();
        $users = User::all();
        return view('wrektor.tolakwr', compact('surat_keluar', 'users'));
    }

    public function indexTtd()
    {
        
        $surat_keluar = Surat_keluar::where('status_tata_naskah', 2)->get();
        $users = User::all();
        return view('wrektor.ttdwr', compact('surat_keluar', 'users'));
    }

    public function indexParaf()
    {
        
        $surat_keluar = Surat_keluar::where('status_tata_naskah', 3)->get();
        $users = User::all();
        return view('wrektor.parafwr', compact('surat_keluar', 'users'));
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
        $surat_keluar = Surat_keluar::findOrFail($id);
        if ($surat_keluar->tata_naskah_file == null) {
            return view('wrektor.detail_tata_naskah_ck_keluar',compact('surat_keluar'));
        }
        elseif ($surat_keluar->tata_naskah_ck == null) {
            return view('wrektor.detail_tata_naskah_file_keluar',compact('surat_keluar'));
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

    public function ditolak(Request $request, $id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id); 
        $surat_keluar->status_tata_naskah = 0;
        $surat_keluar->keterangan_tata_naskah=$request->keterangan_tata_naskah;
        $surat_keluar->save();
        return redirect()->route('wrektor.pengajuan')->withSuccess('Permohonan surat berhasil ditolak');
    }

    public function tandatangan($id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id);
        $surat_keluar->status_tata_naskah = 2;
        $surat_keluar->save();
        return redirect()->route('wrektor.pengajuan', $surat_keluar->id)->withSuccess('Permohonan surat berhasil ditandatangani dan diteruskan ke sekretaris');
    }

    public function paraf($id)
    {
        $surat_keluar = Surat_keluar::findOrFail($id);
        $surat_keluar->status_tata_naskah = 3;
        $surat_keluar->save();
        return redirect()->route('wrektor.pengajuan')->withSuccess('Permohonan surat berhasil di paraf dan diteruskan ke Rektor');
    }

}
