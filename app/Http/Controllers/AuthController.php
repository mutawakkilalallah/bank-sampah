<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            "title" => "Login"
        ];

        return view('login');
    }

    public function auth()
    {
        // 
    }

    public function logout()
    {
        // 
    }
}
