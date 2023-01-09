<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function admin(){
        return view('homeAdmin');
    }

    public function validateLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('/homeAdmin');
        }

        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
