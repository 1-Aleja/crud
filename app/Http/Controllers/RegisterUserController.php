<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Facades\App\Models\User;


class RegisterUserController extends Controller
{
    public function viewRegisterUser()
    {
        return view('register.view_register');
    }
    public function registerUser(Request $request)
    {   
        User::searchEmail($request);
        return back();
    }
}
