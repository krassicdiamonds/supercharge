<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\TaskManagementController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// guest routes
Route::middleware(['guest'])->controller(AuthController::class)->group(function(){
    // handle get request for register page
    Route::get('/register', 'showRegister')->name('show.register');
    // handle get request for login page
    Route::get('/login', 'showLogin')->name('show.login');

    // handle post request for register
    Route::post('/register', 'register')->name('register');
    // handle post request for login
    Route::post('/login', 'login')->name('login');
});


// Return views via NavigationController
Route::middleware(['auth'])->prefix('dashboard')->controller(NavigationController::class)->group(function(){
    // handle get home request
    Route::get('/home', 'showHome')->name('dashboard.home');
    // handle get dashboard request
    Route::get('/dashboard', 'showDashboard')->name('dashboard.dashboard');
    // handle get teams request
    Route::get('/teams', 'showTeams')->name('dashboard.teams');
    // handle get boards request
    Route::get('/boards', 'showBoards')->name('dashboard.boards');
    // handle get inbox view
    Route::get('/inbox', 'showInbox')->name('dashboard.inbox');
    // handle get timeline request
    Route::get('/timeline', 'showTimeline')->name('dashboard.timeline');
    // handle get settings request
    Route::get('/settings', 'showSettings')->name('dashboard.settings');
});

// Get Data from the Task Management Controller

Route::middleware(['auth'])->controller(TaskManagementController::class)->group(function(){

});