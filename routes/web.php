<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/skAktifStudi', function () {
    return view('/mahasiswa/skAktifStudi');
});
Route::get('/skKTM', function () {
    return view('/mahasiswa/skKTM');
});
Route::get('/skOrganisasi', function () {
    return view('/mahasiswa/skOrganisasi');
});
Route::get('/skStudi', function () {
    return view('/mahasiswa/skStudi');
});
Route::get('/skLulus', function () {
    return view('/mahasiswa/skLulus');
});

Route::get('/akademik', function () {
    return view('/akademik/dashboard');
});

Route::get('/home', 'PagesController@mahasiswa');
Route::get('/buatsurat', 'PagesController@BuatSurat');
Route::get('/mahasiswa/buatsurat/SkAktifstudi', 'SuratController@CreateSkAktifStudi');
Route::get('/mahasiswa/buatsurat/SkKtm', 'SuratController@CreateSkKtm');
Route::get('/mahasiswa/buatsurat/SkOrganisasi', 'SuratController@CreateSkOrganisasi');
Route::get('/mahasiswa/buatsurat/SkStudi', 'SuratController@CreateSkStudi');
Route::get('/mahasiswa/buatsurat/SkLulus', 'SuratController@CreateSkLulus');


Route::get('/akademik/dashboard', 'PagesController@akademik');
Route::get('/akademik/arsip/terima', 'surat_controller@index_arsip');
Route::get('/akademik/pemohon/{id}', 'surat_controller@show_akademik');
Route::get('/akademik/terima/{id}',  'surat_controller@update_akademik_terima');
Route::get('/akademik/tolak/{id}',  'surat_controller@update_akademik_tolak');
Route::get('/akademik/cetak/{id}', 'surat_controller@cetak_akademik');