<?php

namespace App\Http\Controllers\UnitKerja\TendikJurusan;

use App\Http\Controllers\Controller;
use App\Models\E_surat\Surat;
use App\Models\E_surat\Mahasiswa;
use App\User;
use App\Models\E_surat\Prodi;
use App\Models\E_surat\Jurusan;
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
    public function indexPengajuanJurusan()
    {
        $jurusan = Auth::user()->name;
        $surat = Surat::where('status_surat', 4)->whereHas('users.mahasiswa.prodi.jurusan', function($q) use ($jurusan){
            $q->where('nama_jurusan', $jurusan);
        })->get();
        return view('unit_kerja.tendik_jurusan.pengajuan', compact('surat'));
    }

    public function indexVerifikasiJurusan()
    {
        $jurusan = Auth::user()->name;
        $surat = Surat::where('status_surat', 5)->whereHas('users.mahasiswa.prodi.jurusan', function($q) use ($jurusan){
            $q->where('nama_jurusan', $jurusan);
        })->get();
        return view('unit_kerja.tendik_jurusan.verifikasi', compact('surat'));
    }

    public function indexCetakJurusan()
    {
        $jurusan = Auth::user()->name;
        $surat = Surat::where('status_surat', 6)->whereHas('users.mahasiswa.prodi.jurusan', function($q) use ($jurusan){
            $q->where('nama_jurusan', $jurusan);
        })->get();
        return view('unit_kerja.tendik_jurusan.cetak', compact('surat'));
    }

    public function indexTolakJurusan()
    {
        $jurusan = Auth::user()->name;
        $surat = Surat::where('status_surat', 7)->whereHas('users.mahasiswa.prodi.jurusan', function($q) use ($jurusan){
            $q->where('nama_jurusan', $jurusan);
        })->get();
        return view('unit_kerja.tendik_jurusan.tolak', compact('surat'));
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
        if ($surat->nama_surat == 'Surat Permohonan Data') {
            return view('unit_kerja.detail_surat.detail_surat_permohonan_data',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            return view('unit_kerja.detail_surat.detail_sp_kp',compact('surat'));
        }
    	elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            return view('unit_kerja.detail_surat.detail_sp_proposal_kp',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            return view('unit_kerja.detail_surat.detail_surat_rekomendasi_beasiswa',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            return view('unit_kerja.detail_surat.detail_sp_magang',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Melaksanakan Tugas Akhir') {
            return view('unit_kerja.detail_surat.detail_sk_ta',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            return view('unit_kerja.detail_surat.detail_sk_perjalanan',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Peminjaman') {
            return view('unit_kerja.detail_surat.detail_surat_permohonan_peminjaman',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            return view('unit_kerja.detail_surat.detail_sp_mmta',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            return view('unit_kerja.detail_surat.detail_surat_melanjutkan_penelitian',compact('surat'));
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

    public function TolakJurusan(Request $request, $id)
    {
        $surat = Surat::findOrFail($id); 
        $surat->status_surat = 7;
        $surat->keterangan_surat=$request->keterangan_surat;
        $surat->save();
        return redirect()->route('jurusan.tolak')->withSuccess('Permohonan surat berhasil ditolak');
    }

    public function VerifikasiJurusan($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 5;
        $surat->save();
        return redirect()->route('jurusan.detail', $surat->id)->withSuccess('Permohonan surat berhasil diverifikasi');
    }

    public function CetakJurusan(Request $request, $id)
    {
    	$surat = Surat::findOrFail($id);
        $surat->no_surat = $request->no_surat;
        $surat->status_surat = 6;
        $surat->save();
        
        $tanggal = Carbon::today()->format('d-m-Y');
        if ($surat->nama_surat == 'Surat Permohonan Data') {
            $pdf = PDF::loadview('cetak.sk_aktif_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            $pdf = PDF::loadview('cetak.sk_aktif_organisasi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
    	elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            $pdf = PDF::loadview('cetak.sk_pernah_studi',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            $pdf = PDF::loadview('cetak.sk_lulus',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Melaksanakan Tugas Akhir') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Peminjaman') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            $pdf = PDF::loadview('cetak.sk_pengganti_ktm',['surat'=>$surat, 'tanggal'=>$tanggal]);
        }
    	return $pdf->download('surat-pdf');
    }

}
