<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name("home");

require __DIR__ . '/web/account.php';
