<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('akademik')){
            return redirect()->route('akademik.dashboard');
        }
        elseif ($user->hasRole('jurusan')){
            return redirect()->route('jurusan.dashboard');
        }
        elseif ($user->hasRole('unit_kerja')){
            return redirect()->route('unit_kerja.dashboard');
        }
        elseif ($user->hasRole('wakil_rektor')){
            return redirect()->route('wrektor.dashboard');
        }
        elseif ($user->hasRole('sekretariat')){
            return redirect()->route('sekretariat.dashboard');
        }
    }
}
