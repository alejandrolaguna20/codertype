<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->name('user.leaderboard');
