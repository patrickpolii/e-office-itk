<?php

namespace App\Http\Controllers\Akademik;

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
    public function index()
    {
        
        $surat = Surat::where('status_surat', 0)->get();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.pengajuan', compact('surat', 'users', 'mahasiswa'));
    }

    public function indexVerifikasi()
    {
        
        $surat = Surat::where('status_surat', 1)->get();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.verifikasi', compact('surat', 'users', 'mahasiswa'));
    }

    public function indexTeruskan()
    {
        
        $surat = Surat::where('status_surat', 4)->get();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.diteruskan', compact('surat', 'users', 'mahasiswa'));
    }

    public function indexCetak()
    {
        
        $surat = Surat::where('status_surat', 2)->get();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.cetak', compact('surat', 'users', 'mahasiswa'));
    }

    public function indexTolak()
    {
        
        $surat = Surat::where('status_surat', 3)->get();
        $users = User::all();
        $mahasiswa = Mahasiswa::all();
        return view('akademik.ditolak', compact('surat', 'users', 'mahasiswa'));
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
        elseif ($surat->nama_surat == 'Surat Rekomendasi Beasiswa') {
            return view('akademik.detail_surat.detail_surat_rekomendasi_beasiswa',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar Magang') {
            return view('akademik.detail_surat.detail_sp_magang',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Data') {
            return view('akademik.detail_surat.detail_surat_permohonan_data',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Pengantar KP') {
            return view('akademik.detail_surat.detail_sp_kp',compact('surat'));
        }
    	elseif ($surat->nama_surat == 'Surat Pengantar Proposal KP') {
            return view('akademik.detail_surat.detail_sp_proposal_kp',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Melaksanakan Tugas Akhir') {
            return view('akademik.detail_surat.detail_sk_ta',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SK Perjalanan') {
            return view('akademik.detail_surat.detail_sk_perjalanan',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Permohonan Peminjaman') {
            return view('akademik.detail_surat.detail_surat_permohonan_peminjaman',compact('surat'));
        }
        elseif ($surat->nama_surat == 'SP-MMTA') {
            return view('akademik.detail_surat.detail_sp_mmta',compact('surat'));
        }
        elseif ($surat->nama_surat == 'Surat Melanjutkan Penelitian') {
            return view('akademik.detail_surat.detail_surat_melanjutkan_penelitian',compact('surat'));
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
        $surat = Surat::findOrFail($id); 
        $surat->status_surat = 3;
        $surat->keterangan_surat=$request->keterangan_surat;
        $surat->save();
        return redirect()->route('akademik.tolak')->withSuccess('Permohonan surat berhasil ditolak');
    }

    public function verifikasi($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 1;
        $surat->save();
        return redirect()->route('akademik.detail', $surat->id)->withSuccess('Permohonan surat berhasil diverifikasi');
    }

    public function diteruskan($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->status_surat = 4;
        $surat->save();
        return redirect()->route('akademik.teruskan')->withSuccess('Permohonan surat berhasil diteruskan kejurusan');
    }

    public function cetak(Request $request, $id)
    {
    	$surat = Surat::findOrFail($id);
        if($surat->no_surat == null){
            $surat->no_surat = $request->no_surat;
            $surat->status_surat = 2;
            $surat->save();
        }
        
        $tanggal = Carbon::today()->format('d-m-Y');
        $hari = substr($tanggal,0,2);
        $bulan = substr($tanggal,3,2);
        $tahun = substr($tanggal,6,4);

        $nama = [
            "01" => "Januari",
            "02" => "Februari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "November",
            "12" => "Desember",
        ];

        $tanggal = $hari.' '.$nama[$bulan].' '.$tahun;
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
