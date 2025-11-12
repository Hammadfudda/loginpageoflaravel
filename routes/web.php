<?php
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;


// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard (protected)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


