<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('components.auth.log-in');
    }


    public function signUp()
    {
        return view('components.auth.sign-up');
    }
}
