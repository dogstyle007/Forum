<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
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
     * Overwrites redirect path.
     *
     */
    protected $redirectTo = '/';

    protected $username = 'index';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'index' => 'regex:/\\b\\w{4}[-.]?\\d{2}[-.]?\\d{4}\\b/',
            'role' => 'required',
            'dept' => 'required',
            'gender' => 'required|max:6|min:4|alpha',
            'email' => 'required|email|max:255|unique:users', 
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $approved = 1;
        $isteacher = 0;
        $number = null;
        if($data['role']=='staff'){
            $approved = 0;
            $isteacher = 1;
        }
        return User::create([
            'name' => $data['name'],
            'index' => $data['index'],
            'dept' => $data['dept'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isteacher' => $isteacher,
            'approved' => $approved
        ]);
    }
}
