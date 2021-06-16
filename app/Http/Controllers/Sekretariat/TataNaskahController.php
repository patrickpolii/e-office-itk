<?php

namespace App\Http\Controllers\Sekretariat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\E_office\Surat_keluar;
use App\User;
use Pdf;
use File;
use Auth;

class TataNaskahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTtdWR()
    {
        $surat_keluar = Surat_keluar::where('status_tata_naskah',  2)->get();
        $users = User::all();
        return view('sekretariat.ttdWR', compact('surat_keluar', 'users'));
    }

    public function indexTtdRektor()
    {
        
        $surat_keluar = Surat_keluar::where('status_tata_naskah', 4)->get();
        $users = User::all();
        return view('sekretariat.ttdRektor', compact('surat_keluar', 'users'));
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
            return view('sekretariat.detail_tata_naskah_ck_keluar',compact('surat_keluar'));
        }
        elseif ($surat_keluar->tata_naskah_ck == null) {
            return view('sekretariat.detail_tata_naskah_file_keluar',compact('surat_keluar'));
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
        $surat_keluar = Surat_keluar::findOrFail($id);
        $surat_keluar->no_tata_naskah = $request->no_tata_naskah;
        $surat_keluar->status_tata_naskah = 2;
        $surat_keluar->save();

        if($request->file('tata_naskah_file'))
        {
            $tujuan_upload = 'data_file';
            $file = $request->file('tata_naskah_file');
            $nama = $file->move($tujuan_upload,$file->getClientOriginalName());
            $surat_keluar->tata_naskah_file = $nama;
            $surat_keluar->save();
            if(File::exists(public_path($surat_keluar->tata_naskah_file)))
            {
                File::delete(public_path($surat_keluar->tata_naskah_file));
            }
        }
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
