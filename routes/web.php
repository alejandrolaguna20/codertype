<?php

use App\Http\Controllers\CodertypeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [CodertypeController::class, "home"]);

require __DIR__ . '/web/account.php';
