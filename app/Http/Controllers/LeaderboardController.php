<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function leaderboard()
    {
        $data = [];
        $data["display_user"] = false;

        if (Auth::user()) {
            $data["display_user"] = false;
        }

        return view("user.leaderboard", $data);
    }
}
