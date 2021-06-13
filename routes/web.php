<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@HomePage');

Auth::routes(['register' => false]);
Route::get('/akademik/dashboard', 'Akademik\DashboardController@Dashboard'
)->middleware('role:akademik')->name('akademik.dashboard');
Route::get('/akademik/pengajuan', 'Akademik\SuratController@index'
)->middleware('role:akademik')->name('akademik.pengajuan');
Route::get('/akademik/verifikasi', 'Akademik\SuratController@indexVerifikasi'
)->middleware('role:akademik')->name('akademik.verifikasi');
Route::get('/akademik/diteruskan', 'Akademik\SuratController@indexTeruskan'
)->middleware('role:akademik')->name('akademik.teruskan');
Route::get('/akademik/tolak', 'Akademik\SuratController@indexTolak'
)->middleware('role:akademik')->name('akademik.tolak');
Route::get('/akademik/cetak', 'Akademik\SuratController@indexCetak'
)->middleware('role:akademik')->name('akademik.cetak');
Route::get('/akademik/pengajuan/detail/{id}', 'Akademik\SuratController@show')->name('akademik.detail');
Route::get('/akademik/pengajuan/verifikasi/{id}', 'Akademik\SuratController@verifikasi')->name('verifikasi.surat');
Route::get('/akademik/pengajuan/diteruskan/{id}', 'Akademik\SuratController@diteruskan')->name('diteruskan.surat');
Route::get('/akademik/pengajuan/detail/{id}/cetak', 'Akademik\SuratController@cetak')->name('cetak.surat');
Route::get('/akademik/pengajuan/ditolak/{id}', 'Akademik\SuratController@ditolak')->name('ditolak.surat');

Route::get('/jurusan/dashboard', 'UnitKerja\TendikJurusan\DashboardController@Dashboard')->middleware('role:jurusan')->name('jurusan.dashboard');
Route::get('/jurusan/pengajuan', 'UnitKerja\TendikJurusan\SuratController@IndexPengajuanJurusan'
)->middleware('role:jurusan')->name('jurusan.pengajuan');
Route::get('/jurusan/verifikasi', 'UnitKerja\TendikJurusan\SuratController@IndexVerifikasiJurusan'
)->middleware('role:jurusan')->name('jurusan.verifikasi');
Route::get('/jurusan/cetak', 'UnitKerja\TendikJurusan\SuratController@IndexCetakJurusan'
)->middleware('role:jurusan')->name('jurusan.cetak');
Route::get('/jurusan/tolak', 'UnitKerja\TendikJurusan\SuratController@IndexTolakJurusan'
)->middleware('role:jurusan')->name('jurusan.tolak');
Route::get('/jurusan/pengajuan/detail/{id}', 'UnitKerja\TendikJurusan\SuratController@show')->name('jurusan.detail');
Route::get('/jurusan/pengajuan/verifikasi/{id}', 'UnitKerja\TendikJurusan\SuratController@VerifikasiJurusan')->name('jurusanverifikasi.surat');
Route::get('/jurusan/pengajuan/cetak/{id}', 'UnitKerja\SuratController@CetakJurusan')->name('jurusancetak.surat');
Route::get('/jurusan/pengajuan/toalak/{id}', 'UnitKerja\TendikJurusan\SuratController@TolakJurusan')->name('jurusantolak.surat');


Route::get('/wakilrektor/dashboard', 'WRektor\DashboardController@Dashboard')->middleware('role:wakil_rektor')->name('wrektor.dashboard');
Route::get('/wakilrektor/pengajuan', 'WRektor\TataNaskahController@index'
)->middleware('role:wakil_rektor')->name('wrektor.pengajuan');
Route::get('/wakilrektor/paraf', 'WRektor\TataNaskahController@indexParaf'
)->middleware('role:wakil_rektor')->name('wrektor.paraf');
Route::get('/wakilrektor/ttd', 'WRektor\TataNaskahController@indexTtd'
)->middleware('role:wakil_rektor')->name('wrektor.ttd');
Route::get('/wakilrektor/tolak', 'WRektor\TataNaskahController@indexTolak'
)->middleware('role:wakil_rektor')->name('wrektor.tolak');
Route::get('/wakilrektor/pengajuan/detail/{id}', 'WRektor\TataNaskahController@show')->name('wrektor.detail');
Route::get('/wakilrektor/pengajuan/paraf/{id}', 'WRektor\TataNaskahController@paraf')->name('wr.paraf');
Route::get('/wakilrektor/pengajuan/ttd/{id}', 'WRektor\TataNaskahController@tandatangan')->name('wr.ttd');
Route::get('/wakilrektor/pengajuan/tolak/{id}', 'WRektor\TataNaskahController@ditolak')->name('wr.tolak');


Route::get('/unitkerja/dashboard', 'UnitKerja\DashboardController@Dashboard')->middleware('role:unit_kerja')->name('unit_kerja.dashboard');
Route::get('/unitkerja/kirimsurat', 'UnitKerja\TataNaskahController@SuratKeluar_create')->middleware('role:unit_kerja')->name('kirim.surat');
Route::post('/unitkerja/kirimsurat', 'UnitKerja\TataNaskahController@SuratKeluar_store')->middleware('role:unit_kerja')->name('suratkeluar.store');




Route::get('/skAktifStudi', 'Mahasiswa\SuratController@sk_aktif_studi_create')->name('skAktifStudi.create');
Route::post('/skAktifStudi', 'Mahasiswa\SuratController@sk_aktif_studi_store')->name('skAktifStudi.store');
Route::get('/skKTM', 'Mahasiswa\SuratController@sk_ktm_create')->name('skKTM.create');
Route::post('/skKTM', 'Mahasiswa\SuratController@sk_pengganti_ktm_store')->name('skKTM.store');
Route::get('/skOrganisasi', 'Mahasiswa\SuratController@sk_organisasi_create')->name('skOrganisasi.create');
Route::post('/skOrganisasi', 'Mahasiswa\SuratController@sk_aktif_organisasi_store')->name('skOrganisasi.store');
Route::get('/skStudi', 'Mahasiswa\SuratController@sk_studi_create')->name('skStudi.create');
Route::post('/skStudi', 'Mahasiswa\SuratController@sk_pernah_studi_store')->name('skStudi.store');
Route::get('/skLulus', 'Mahasiswa\SuratController@sk_lulus_create')->name('skLulus.create');
Route::post('/skLulus', 'Mahasiswa\SuratController@sk_lulus_store')->name('skLulus.store');
Route::get('/srBeasiswa', 'Mahasiswa\SuratController@surat_rekomendasi_beasiswa_create')->name('srBeasiswa.create');
Route::post('/srBeasiswa', 'Mahasiswa\SuratController@surat_rekomendasi_beasiswa_store')->name('srBeasiswa.store');
Route::get('/spMagang', 'Mahasiswa\SuratController@sp_magang_create')->name('spMagang.create');
Route::post('/spMagang', 'Mahasiswa\SuratController@sp_magang_store')->name('spMagang.store');
Route::get('/spKP', 'Mahasiswa\SuratController@sp_kp_create')->name('spKP.create');
Route::post('/spKP', 'Mahasiswa\SuratController@sp_kp_store')->name('spKP.store');

Route::get('/statusSurat', 'Mahasiswa\StatusController@status_surat')->name('status.surat');

Route::get('/home', 'PagesController@Home');
Route::group(['prefix'=>'buatsurat'], function(){
    Route::get('/', 'PagesController@BuatSurat')->name('buat.surat');
   
});



