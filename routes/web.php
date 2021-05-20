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

Route::get('/akademik', 'Akademik\SuratController@index'
)->middleware('role:akademik')->name('akademik.dashboard');
Route::get('/akademik/detail/{id}', 'Akademik\SuratController@show');
Route::get('/akademik/detail/{id}/cetak', 'Akademik\SuratController@cetak')->name('cetak.surat');


Route::get('/skAktifStudi', 'Mahasiswa\SuratController@sk_aktif_studi_create');
Route::post('/skAktifStudi', 'Mahasiswa\SuratController@sk_aktif_studi_store')->name('skAktifStudi.store');
Route::get('/skKTM', 'Mahasiswa\SuratController@sk_ktm_create');
Route::post('/skKTM', 'Mahasiswa\SuratController@sk_pengganti_ktm_store')->name('skKTM.store');
Route::get('/skOrganisasi', 'Mahasiswa\SuratController@sk_organisasi_create');
Route::post('/skOrganisasi', 'Mahasiswa\SuratController@sk_aktif_organisasi_store')->name('skOrganisasi.store');
Route::get('/skStudi', 'Mahasiswa\SuratController@sk_studi_create');
Route::post('/skStudi', 'Mahasiswa\SuratController@sk_pernah_studi_store')->name('skStudi.store');
Route::get('/skLulus', 'Mahasiswa\SuratController@sk_lulus_create');
Route::post('/skLulus', 'Mahasiswa\SuratController@sk_lulus_store')->name('skLulus.store');



Route::get('/home', 'PagesController@Home');
Route::group(['prefix'=>'buatsurat'], function(){
    Route::get('/', 'PagesController@BuatSurat')->name('buat.surat');
   
});




Route::get('/akademik/arsip/terima', 'surat_controller@index_arsip');
Route::get('/akademik/pemohon/{id}', 'surat_controller@show_akademik');
Route::get('/akademik/terima/{id}',  'surat_controller@update_akademik_terima');
Route::get('/akademik/tolak/{id}',  'surat_controller@update_akademik_tolak');
Route::get('/akademik/cetak/{id}', 'surat_controller@cetak_akademik');

