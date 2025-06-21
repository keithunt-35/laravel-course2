<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login()
    {
        //returns a view
        return view("auth.login");
    }
    function loginPost(Request $request)
    {
        // Handle login post request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('home');
        }
        return redirect("login")->with("error", "invalid credentials"
            );
    }

    function register()
    {
        // Show registration form
        // reurns a view
        return view("auth.register");
    }

    function registerPost(Request $request)
    {
        // Handle registration post request
        //accecptinga the post request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User();
    } 

    
}
