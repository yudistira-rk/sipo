<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    public function halamanLogin(){
        return view('Login.Login');
    }


    public function postLogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }
        return redirect('/');
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
