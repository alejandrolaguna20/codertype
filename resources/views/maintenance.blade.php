@extends('layouts.app')

@section('title', 'Codertype | Under Development')

@section('content')
<section class="min-h-screen px-4 pt-20 pb-12">
    <div class="max-w-6xl mx-auto space-y-12">
        <!-- Development Header -->
        <div class="relative group">
            <div class="bg-gradient-to-br from-white/5 to-transparent rounded-2xl border border-white/10 p-8 backdrop-blur-lg text-center">
                <div class="max-w-2xl mx-auto">
                    <h1 class="text-4xl font-bold mb-4 bg-gradient-to-r from-violet-400 to-teal-400 bg-clip-text text-transparent">
                        Under Active Development
                    </h1>
                    <p class="text-xl text-gray-400 mb-6">
                        Building a better coding experience
                    </p>

                    <!-- Development Status -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                            <div class="flex items-center gap-3">
                                <div class="text-teal-400 bg-teal-900/30 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Current Focus</p>
                                    <p class="font-bold">New Features</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                            <div class="flex items-center gap-3">
                                <div class="text-blue-400 bg-blue-900/30 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Improving</p>
                                    <p class="font-bold">Typing Analytics</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white/5 p-4 rounded-xl border border-white/10">
                            <div class="flex items-center gap-3">
                                <div class="text-pink-400 bg-pink-900/30 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Enhancing</p>
                                    <p class="font-bold">Code Snippets</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Development Updates -->
                    <div class="bg-white/5 rounded-xl border border-white/10 p-6 text-left">
                        <h3 class="text-lg font-bold mb-4">What We're Building:</h3>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-center gap-2">
                                <span class="text-violet-400">⌨️</span>
                                Advanced typing analytics
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-teal-400">📈</span>
                                Detailed progress tracking
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-pink-400">💡</span>
                                Real-time coding challenges
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social & Updates -->
        <div class="text-center">
            <p class="text-gray-400 mb-6 max-w-xl mx-auto">
                We're working hard to deliver an exceptional coding practice experience.
                Stay tuned for exciting updates!
            </p>
            <div class="flex justify-center gap-4">
                <a href="https://github.com/alejandrolaguna20/codertype" class="px-6 py-2 bg-white/5 rounded-lg border border-white/10 hover:border-violet-400 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5 text-violet-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span>GitHub Updates</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
