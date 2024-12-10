<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::view('/', 'welcome');

Route::get('/account', [AccountController::class, 'account_view'])->name('account.signin');
Route::post('/account', [AccountController::class, 'log_in_user'])->name('account.login');
