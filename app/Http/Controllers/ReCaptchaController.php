<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;

class ReCaptchaController extends Controller
{
    //
    public function showLogin()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            //echo ("Nothing". $request->input('g-recaptcha-response'));
            $request->validate(
                [
                    'email' => 'required',
                ]
            );

            //echo $request->input('email') . "<br>";
            $recaptcha = new ReCaptcha('6LdsjLwUAAAAALgAwAQabDrwnbLJSExr8GbNFytg');
            $response = $recaptcha->verify($request->input('g-recaptcha-response'));
            if($response->isSuccess())
            {
                return redirect('success');
            }
            else
            {
                $errors = $response->getErrorCodes();
                var_dump( $errors );
            }
        }
    }

    public function showSuccess()
    {
        return view('success');
    }
}
