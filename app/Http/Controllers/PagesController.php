<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mahasiswa()
    {
        return view ('mahasiswa/home');
    }
    
    public function BuatSurat()
    {
        return view ('mahasiswa/buatsurat');
    }
}
