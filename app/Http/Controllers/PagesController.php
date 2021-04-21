<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function HomePage()
    {
        return view ('homepage/app');
    }

    public function Home()
    {
        return view ('mahasiswa/home');
    }
    
    public function BuatSurat()
    {
        return view ('mahasiswa/buatsurat');
    }

}
