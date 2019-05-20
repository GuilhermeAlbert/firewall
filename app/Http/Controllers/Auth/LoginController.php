<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\LogAcesso;
use App\User;

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
    protected $redirectTo = '/dashboard/listar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);

        // SALVA LOG DE ACESSO PARA LOGIN
        // $log_acesso = new LogAcesso();
        // $log_acesso->endereco_ip = $_SERVER['REMOTE_ADDR'];
        // $log_acesso->tipo = "login";
        // $log_acesso->id_usuario = 1;
        // $log_acesso->save();

        return $this->sendFailedLoginResponse($request);
    }


    public function logout(Request $request)
    {   
        // $id_usuario = Auth::user()->id;
        
        $this->guard()->logout();

        $request->session()->invalidate();

        // SALVA LOG DE ACESSO PARA LOGOUT
        // $log_acesso = new LogAcesso();
        // $log_acesso->endereco_ip = $_SERVER['REMOTE_ADDR'];
        // $log_acesso->tipo = "logout";
        // $log_acesso->id_usuario = $id_usuario;
        // $log_acesso->save();         

        return $this->loggedOut($request) ?: redirect('/');
    }
    
}
