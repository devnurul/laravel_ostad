<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function register(RegisterRequest $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // ... register the user, save to database, etc.

        return response()->json(['message' => 'Registration successful']);
    };
}
