<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*
     * DYNAMIC RETURN OF THEME VIEW
     */
    public function showLoginForm()
    {
        /* REDIRECT TO THEME LOGIN VIEW */
        if(session('theme'))
        {
            return view('themes.'.session('theme').'.auth.login');
        }
        return view('auth.login');
    }

    /*
     * DYNAMIC REDIRECT OF THEME VIEW
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            if(session('theme'))
            {
                return redirect('theme/'.session('theme'));
            }
            return redirect('/');

        }  else {
            $this->incrementLoginAttempts($request);
            return redirect()->back()->withErrors('Incorect credentials!');
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        if(session('theme'))
        {
            $theme = session('theme');
            $request->session()->invalidate();
            return redirect('theme/'.$theme);
        }

        $request->session()->invalidate();
        return redirect('/');
    }
}
