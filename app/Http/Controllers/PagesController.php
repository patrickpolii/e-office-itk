<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function KP()
    {
        return view ('mahasiswa/spKP');
    }

}
