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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(! auth()->attempt($credentials)){
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

        if (auth()->user()->level == 1) {
            return redirect()->route('dashboard.index');
        }elseif (auth()->user()->level == 2) {
            return redirect()->route('user.dashboard');
        }elseif (auth()->user()->level == 3) {
            return redirect()->route('manager.dashboard');
        }elseif (auth()->user()->level == 4) {
            return redirect()->route('supervisor.dashboard');
        }

        return redirect()->route('home');
    }
}
