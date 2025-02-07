<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaderboardController;

Route::middleware('auth_only')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/leaderboard', [LeaderboardController::class, 'leaderboard'])->name('user.leaderboard');
});
