<?php

namespace App\Http\Controllers\Sekretariat;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\E_office\Surat_keluar;
use App\User;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view ('sekretariat.dashboard');
    }
}
