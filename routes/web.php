<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// guest routes
Route::middleware('guest')->controller(AuthController::class)->group(function(){
    // handle get request for register page
    Route::get('/register', 'showRegister')->name('show.register');
    // handle get request for login page
    Route::get('/login', 'showLogin')->name('show.login');

    // handle post request for register
    Route::post('/register', 'register')->name('register');
    // handle post request for login
    Route::post('/login', 'login')->name('login');
});

// auth routes
Route::middleware('auth')->group(function(){
    Route::get('/dashboard/home', function(){
        return view('dashboard.home');
    })->name('dashboard.home');;
});