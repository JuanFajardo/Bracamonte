<?php

namespace App\Http\Controllers\Auth;

use App\User;
//use App\Grupo;
use Hash;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $redirectAfterLogout = '/login';
    protected $redirectAfterRegister = 'usuario';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */


     //protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'grupo' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'name' => 'required|max:255',
            'username' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $data)//array $data)
    {
        $estado = false;
        User::create([
            'nombre' => $data['nombre'],
            'grupo' => $data['grupo'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'username' => $data['username'],
        ]);
        return redirect('/usuario');
    }





}
