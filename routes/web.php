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

Route::get('/home', function () {
    return view('/main');
});

Route::get('/buatsurat', function () {
    return view('/mahasiswa/buatsurat');
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