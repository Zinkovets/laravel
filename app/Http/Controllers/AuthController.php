<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }
    public function showRegisterForm()
    {
        return view("auth.register");
    }
    public function register(Request $request)
    {
       $request->validate([
           "login"=>["required","login","string"],
        "telephone"=>["required","telephone",],
        "country"=>["required","country","string"],
        "password"=>["required","password",],
       ]);

    }
}
