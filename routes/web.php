<?php

use App\Http\Controllers\CodertypeController;
use Illuminate\Support\Facades\Route;


// NOTE: enable when web is in development
/* Route::get('{any}', function () {
    return view('maintenance');
})->where('any', '.*'); */

Route::get("/", [CodertypeController::class, "home"]);

include(base_path("routes/web/account.php"));
include(base_path("routes/web/user.php"));
