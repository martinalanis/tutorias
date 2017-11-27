<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLogin( $type = null ) {

    //     switch($type) {

    //         case 'administrador': 
    //         case 'coordinador':
    //         case 'tutor':
    //         case 'tutorado':
    //             return view('auth.login', compact('type', $type));
    //             break;
    //         default: return view('errors.404');
    //         break;
    //     }

    // }

    /**
     * @Overrride
     * Returns username.
     *
     * @var String
     */


    public function username()
    {
        return 'username';
    }

    public function redirectTo()
    {

        if(Auth::user()->type == 'tutorado') {

            return '/tutorado';
        }

        return '/seleccion';

    }
}
