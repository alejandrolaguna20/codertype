@extends('layouts.app')

@section('title', 'Codertype | Register')

@section('content')
<section class="min-h-screen flex items-center justify-center px-4 pt-20">
    <div class="max-w-md w-full mx-auto">
        <div class="relative inline-block mb-10 w-full text-center">
            <h1 class="font-sans text-4xl md:text-5xl font-bold mb-6 relative z-10">
                Start your journey!
            </h1>
            <div class="absolute -top-4 -left-4 -right-4 -bottom-4 bg-white/5 blur-2xl z-0"></div>
        </div>

        <div class="bg-white/5 rounded-xl border border-white/10 p-8 shadow-lg">
            <h2 class="font-sans font-bold text-xl">Create your account</h2>
            <form method="POST" action="/register" class="space-y-6">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-2">Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        required
                        autocomplete="username"
                        class="w-full bg-black/30 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent-primary transition-all"
                        placeholder="Choose a username"
                    >
                </div>
                    @error('username')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        required
                        autocomplete="email"
                        class="w-full bg-black/30 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent-primary transition-all"
                        placeholder="Enter your email"
                    >
                </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror


                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        autocomplete="new-password"
                        class="w-full bg-black/30 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent-primary transition-all"
                        placeholder="Create a strong password"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        required
                        autocomplete="new-password"
                        class="w-full bg-black/30 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent-primary transition-all"
                        placeholder="Repeat your password"
                    >
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full bg-violet-900 text-white px-8 py-4 rounded-lg hover:bg-violet-950 transition-all font-semibold shadow-lg hover:shadow-xl relative overflow-hidden group"
                    >
                        <span class="font-sans relative z-10">Register</span>
                        <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-6 text-center">
            <p class="text-gray-300">
                Already have an account?
                <a href="/login" class="text-accent-primary hover:text-accent-secondary font-semibold">
                    Log in
                </a>
            </p>
        </div>
    </div>
</section>
@endsection
