<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(int $id)
    {
        $user = User::find($id);
        $preselectedUsers = [];
        $preselectedUsers[] = User::where("is_developer", true)->limit(3)->get();

        return view("user.profile", ["user" => $user, "preselectedUsers" => $preselectedUsers[0]]);
    }
}
