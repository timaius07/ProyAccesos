<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
          $username = Input::get('username');
          $password  = Input::get('password');
          return $username;
        if (Auth::attempt(['username' => $username, 'password' => $password ]))
        {
          return $password;
            //return redirect()->route('dashboard');
        }else {
          return back()
          ->withErrors([$this->username() => trans('auth.failed')])
          ->withInput(request([$this->username()]));
        }

    }

    public function username(){
      return 'username';
    }


}
