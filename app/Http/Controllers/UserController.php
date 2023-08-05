<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $incomingFields = $request->validate([
            'username' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:30'],
        ]);

        return "Hellow my controller";
    }
}
