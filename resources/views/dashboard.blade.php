@extends('layouts.app')
@section('title', 'CodeType | Typing Test')
@section('content')
<div class="min-h-screen text-white flex flex-col">
    <main class="flex-grow flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-3xl">
            <div class="flex justify-between mb-6 text-gray-400">
                <div class="flex space-x-4">
                    <span>WPM: <span class="text-white font-bold">0</span></span>
                    <span>ACC: <span class="text-white font-bold">100%</span></span>
                    <span>Time: <span class="text-white font-bold">15s</span></span>
                </div>
                <div>
                    <span class="text-white font-bold">JavaScript</span>
                </div>
            </div>

            <div class="bg-white/5 rounded-xl border border-white/10 p-6 min-h-min relative">
                <pre class="font-mono font-bold text-lg leading-relaxed text-gray-300"><code id="snippet">function calculateFactorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    }
    return n * calculateFactorial(n - 1);
}</code></pre>
            </div>

            <div class="mt-6 flex justify-center space-x-4">
                <button class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/15 transition">15s</button>
                <button class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/15 transition">30s</button>
                <button class="px-4 py-2 bg-violet-800 text-white rounded-lg hover:bg-violet-700 transition">60s</button>
                <select class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-white">
                    <option>JavaScript</option>
                    <option>Python</option>
                    <option>C</option>
                </select>
            </div>
        </div>
    </main>
</div>
@endsection
