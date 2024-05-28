<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('page.register'); // Perbarui rujukan view dengan subdirektori
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');
        return view('page.welcome', compact('firstName', 'lastName'));
    }
}