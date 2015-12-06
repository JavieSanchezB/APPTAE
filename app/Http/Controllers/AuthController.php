<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthForm;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class AuthController extends Controller
{

    /**
     *
     */
    public function postLogin(AuthForm $request)
    {

        $user = \App\User::where('username', \Request::input('username'))->first();

        if( $user && $user->password == \Request::input('password') )
        {
            if(\Request::input('remember'))
                Auth::login($user,true);
            else
                Auth::login($user);
            
            return view('inicio');
        }else{
            return view("login"); 
        }



     //    if (Auth::attempt(['username'=> \Request::input('username'),'password'=> \Request::input('password')],false))
     //    {
     //       return redirect()->intended('inicio');
     //   }
     //   else
     //   {
     //     return view("login");
     // }
    }


    /**
     *
     */
    public function getLogout()
    {
        Auth::logout();

        return view('login');
    }


    /**
     *
     */
    public function getLogin()
    {
        return view("login");
    }




}
