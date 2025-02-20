<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route for showing the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route for handling the login submission
Route::post('/login', [LoginController::class, 'login']);

// Route for handling logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

// Route for the dashboard, protected by authentication
Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');