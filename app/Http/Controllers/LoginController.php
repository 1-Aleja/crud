<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewLogin () {
        return view('login.view_login');
    }
    public function loginUser (Request $request){
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/data-grid');
        }
        return redirect('/login');
    }
    public function logoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
