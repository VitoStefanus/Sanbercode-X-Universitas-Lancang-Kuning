<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('page.register');
    }

    public function welcome(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        return view('page.welcome', ['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
