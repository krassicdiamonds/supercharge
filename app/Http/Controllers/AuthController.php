<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // show register page
    public function showRegister()
    {
        return view('auth.register');
    }

    // show login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // handle register logic
    public function register(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'confirmed']
        ]);

        // create and save new user with the submited data. Then get that return value which is a new user and log in
        $user = User::create($validatedData);

        // login user with Auth facade
        Auth::login($user);

        // redirect user
        return redirect()->route('dashboard.home');
    }

    // handle login logic
    public function login(Request $request)
    {
        // Validate data
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required', 'string']
        ]);

        // atempt to login
        if( Auth::attempt($validatedData)){
            // regenerate token
            $request->session()->regenerate();

            // redirect
            return redirect()->route('dashboard.home');
        }

        throw ValidationException::withMessages([
            'errors' => 'Invalid credentials. Try again'
        ]);
    }

    // handle logout
    public function logout(Request $request)
    {
        // logout user
        Auth::logout();

        // clear all data from the request session
        $request->session()->invalidate();

        // regenerate token
        $request->session()->regenerateToken();

        // redirect user
        return redirect()->route('welcome');
    }
}