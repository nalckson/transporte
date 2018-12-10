<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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

    public function login(Request $request) {
        if(\Auth::attempt($request->only(["email", "password"]))) {

            $tipousuario = \Auth::user()->tipo_user;

            switch ($tipousuario) {
                case 1:
                    return redirect()->to(route('tecnico.index'));
                    break;
                case 2:
                    return redirect()->to(route('professor.index'));
                    break;
                case 3:
                    return redirect()->to(route('motorista.index'));
                    break;
            }

        }else {
            return view("auth.login", ["error" => "Usuário/senha incorreto!"]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

}
