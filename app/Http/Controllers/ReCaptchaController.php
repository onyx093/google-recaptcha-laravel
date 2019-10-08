<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReCaptchaController extends Controller
{
    //
    public function showLogin()
    {
        return view('index');
    }

    public function login(Request $request)
    {

    }
}
