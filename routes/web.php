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

Route::get('/jurusan/dashboard', 'UnitKerja\DashboardController@Dashboard')->middleware('role:unit_kerja')->name('unit_kerja.dashboard');
Route::get('/jurusan/pengajuan', 'UnitKerja\SuratController@IndexPengajuanJurusan'
)->middleware('role:unit_kerja')->name('jurusan.pengajuan');
Route::get('/jurusan/verifikasi', 'UnitKerja\SuratController@IndexVerifikasiJurusan'
)->middleware('role:unit_kerja')->name('jurusan.verifikasi');
Route::get('/jurusan/cetak', 'UnitKerja\SuratController@IndexCetakJurusan'
)->middleware('role:unit_kerja')->name('jurusan.cetak');
Route::get('/jurusan/tolak', 'UnitKerja\SuratController@IndexTolakJurusan'
)->middleware('role:unit_kerja')->name('jurusan.tolak');
Route::get('/jurusan/pengajuan/detail/{id}', 'UnitKerja\SuratController@show')->name('jurusan.detail');
Route::get('/jurusan/pengajuan/verifikasi/{id}', 'UnitKerja\SuratController@VerifikasiJurusan')->name('jurusanverifikasi.surat');
Route::get('/jurusan/pengajuan/cetak/{id}', 'UnitKerja\SuratController@CetakJurusan')->name('jurusancetak.surat');
Route::get('/jurusan/pengajuan/toalak/{id}', 'UnitKerja\SuratController@TolakJurusan')->name('jurusantolak.surat');




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

Route::get('/statusSurat', 'Mahasiswa\StatusController@status_surat')->name('status.surat');

Route::get('/home', 'PagesController@Home');
Route::group(['prefix'=>'buatsurat'], function(){
    Route::get('/', 'PagesController@BuatSurat')->name('buat.surat');
   
});



