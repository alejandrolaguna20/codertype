<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodertypeController extends Controller
{
    private function dashboard()
    {
        return view("dashboard");
    }

    public function home()
    {
        if (Auth::user()) {
            return self::dashboard();
        }
        return view("welcome");
    }
}
