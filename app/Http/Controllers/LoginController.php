<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function login(Request $request)
    {
        $credencials =[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if (!Auth::attempt($credencials)){
            // return back()->withErrors('Credencais invalidas, tente novamente');
        }
        dd('foi');
        return redirect()->route('home');
    }
    public function logout(){
        Auth::logout();
    }
}
