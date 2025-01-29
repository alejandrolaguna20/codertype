<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
