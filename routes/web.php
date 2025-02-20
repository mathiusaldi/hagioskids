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

Auth::routes();

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');