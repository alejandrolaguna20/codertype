<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/login', [AccountController::class, 'login_view'])->name('account.login');
Route::post('/login', [AccountController::class, 'log_in_user'])->name('account.login_user');

Route::get('/register', [AccountController::class, 'register_view'])->name('account.register');
Route::post('/register', [AccountController::class, 'register_user'])->name('account.register_user');
