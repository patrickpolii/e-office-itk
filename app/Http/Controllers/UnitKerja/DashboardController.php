<?php

namespace App\Http\Controllers\UnitKerja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view ('unit_kerja.dashboard');
    }

    
}
