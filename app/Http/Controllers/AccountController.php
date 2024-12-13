<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function register_view()
    {
        if (Auth::user()) {
            return redirect("/");
        }

        return view('account.register');
    }

    public function login_view()
    {
        if (Auth::user()) {
            return redirect("/");
        }
        return view('account.log-in');
    }

    public function log_in_user(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            $request->session()->regenerate();
            return redirect("/")->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register_user(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&#]/',
                'confirmed',
            ],
        ]);

        $user = new User();
        $user->username = $validated['username'];
        $user->name = $user->username;
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Account created successfully!');
    }
}
