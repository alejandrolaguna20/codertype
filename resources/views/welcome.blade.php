@extends('layouts.app')

@section('title', 'Codertype | Master Developer Typing Speed')

@section('content')
<section class="min-h-screen flex items-center justify-center px-4 pt-20">
    <div class="max-w-4xl mx-auto text-center">
        <div class="relative inline-block mb-6">
            <h1 class="font-sans text-5xl md:text-6xl font-bold mb-6 relative z-10">
                become a faster coder!
            </h1>
            <div class="absolute -top-4 -left-4 -right-4 -bottom-4 bg-white/5 blur-2xl z-0"></div>
        </div>

        <div class="max-w-xl mx-auto">
            <p class="text-xl font-sans text-gray-300 mb-10">
                Improve your coding efficiency with targeted typing practice for <i>programmers</i>.
            </p>

            <div class="flex justify-center space-x-4">
                <a href="/register" class="bg-violet-900 text-white px-8 py-4 rounded-lg hover:bg-violet-950 transition-all font-semibold shadow-lg hover:shadow-xl relative overflow-hidden group">
                    <span class="font-sans relative z-10">Start typing</span>
                    <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                </a>
            </div>
        </div>

        <div class="mt-16 relative">
            <div class="relative z-10 bg-white/5 rounded-xl border border-white/10 p-6 max-w-2xl mx-auto">
                <div class="text-left font-mono text-sm bg-black/50 rounded-lg p-4 font-bold">
                    <span class="text-teal-400">~/codertype</span> <span class="text-gray-400">»</span> typing-practice start
                    <br/>
                    <span class="text-pink-400">Initializing typing session...</span>
                    <br/>
                    <span class="text-blue-400">Loading code snippets</span>
                    <span class="text-gray-500">████████████████</span> 100%
                    <br/>
                    <span class="text-white">$</span> <span class="terminal-cursor">█</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
