<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister() {
        return view("register");
    }

    public function register(Request $request){
        dd($request->all);
    }
}
