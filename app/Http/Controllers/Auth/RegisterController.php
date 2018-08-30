<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'first_name' => 'required|string|max:20',
            'last_name'=>'required|string|max:20',
            'sex'=>'required|string',
            'address'=>'required|string|max:60',
            'knowledge' => 'required|string',
            'phone_no'=>'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $confirmation_code = str_random(30);
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'sex' => $data['sex'],
            'address' => $data['address'],
            'knowledge' => $data['knowledge'],
            'phone_no' => $data['phone_no'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'online' => 1,
            'confirmation_code' => $confirmation_code

        ]);
    }
    // public function confirm($confirmation_code)
    // {
    //     if( ! $confirmation_code)
    //     {
    //         throw new InvalidConfirmationCodeException;
    //     }
    //
    //     $user = User::whereConfirmationCode($confirmation_code)->first();
    //
    //     if ( ! $user)
    //     {
    //         throw new InvalidConfirmationCodeException;
    //     }
    //
    //     $user->confirmed = 1;
    //     $user->confirmation_code = null;
    //     $user->save();
    //
    //     Flash::message('You have successfully verified your account.');
    //
    //     return Redirect::route('login_path');
    // }
}
