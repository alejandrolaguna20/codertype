@extends('layouts.app')

@section('title', 'Codertype | Profile Statistics')

@section('content')
<section class="min-h-screen px-4 pt-20 pb-12">
    <div class="max-w-6xl mx-auto space-y-12">
        <!-- Profile Header with Performance Summary -->
        <div class="relative group">
            <div class="flex flex-col md:flex-row gap-8 items-start md:items-center bg-gradient-to-br from-white/5 to-transparent rounded-2xl border border-white/10 p-8 backdrop-blur-lg">
                <div class="relative">
                    <div class="w-24 h-24 rounded-2xl bg-violet-900/30 flex items-center justify-center shadow-lg">
                        <span class="text-3xl font-bold text-violet-400">{{auth()->user()->name[0]}}</span>
                        <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-4 border-gray-900"></div>
                    </div>
                </div>

                <div class="space-y-2 flex-1">
                    <h1 class="text-3xl font-bold">{{auth()->user()->name}}</h1>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-400">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Joined March 2023</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>32h practiced</span>
                        </div>
                    </div>

                    <!-- Performance Meter -->
                    <div class="mt-4 flex gap-4 items-center">
                        <div class="flex-1 bg-white/10 rounded-full h-3">
                            <div class="h-full bg-gradient-to-r from-violet-400 to-teal-400 rounded-full w-3/4"></div>
                        </div>
                        <span class="text-sm font-mono text-teal-400">Top 15%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Metrics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white/5 p-6 rounded-xl border border-white/10 transition-all hover:border-violet-400/30">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Average Speed</p>
                        <p class="text-3xl font-bold text-teal-400">82<span class="text-lg">wpm</span></p>
                    </div>
                    <div class="text-teal-400 bg-teal-900/30 p-3 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 text-xs text-gray-400">
                    <span class="text-teal-400">▲ 8%</span> from last month
                </div>
            </div>

            <!-- Repeat similar cards for Accuracy and Consistency -->
        </div>

        <!-- Progress Visualization -->
        <div x-data="{ activeMetric: 'wpm' }" class="bg-white/5 rounded-2xl border border-white/10 p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold">Performance Trends</h3>
                <div class="flex gap-2">
                    <button @click="activeMetric = 'wpm'"
                            :class="activeMetric === 'wpm' ? 'bg-violet-900/50 border-violet-400' : 'border-white/10'"
                            class="px-4 py-2 rounded-lg border transition-all">
                        WPM
                    </button>
                    <button @click="activeMetric = 'accuracy'"
                            :class="activeMetric === 'accuracy' ? 'bg-violet-900/50 border-violet-400' : 'border-white/10'"
                            class="px-4 py-2 rounded-lg border transition-all">
                        Accuracy
                    </button>
                </div>
            </div>
            <div class="h-80">
                <div class="bg-black/20 rounded-xl p-4 h-full flex items-center justify-center text-gray-400">
                    <!-- Chart.js or similar integration -->
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Session History -->
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold">Recent Sessions</h3>
                <a href="#" class="text-sm text-gray-400 hover:text-violet-400">View all →</a>
            </div>

            <div class="space-y-2">
                <div class="flex items-center justify-between p-4 bg-white/5 rounded-xl border border-white/10 hover:border-violet-400/30 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-violet-900/30 rounded-lg flex items-center justify-center">
                            <span class="text-violet-400">JS</span>
                        </div>
                        <div>
                            <p class="font-bold">132 WPM</p>
                            <p class="text-sm text-gray-400">JavaScript • 60s</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-pink-400">96%</p>
                        <p class="text-sm text-gray-400">2023-07-20</p>
                    </div>
                </div>

                <!-- More session items -->
            </div>
        </div>

        <!-- Skill Distribution -->
        <div class="bg-white/5 rounded-2xl border border-white/10 p-6">
            <h3 class="text-xl font-bold mb-6">Language Proficiency</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="p-4 bg-violet-900/30 rounded-xl text-center">
                    <div class="text-3xl mb-2 text-violet-400">72%</div>
                    <div class="text-sm">JavaScript</div>
                </div>
                <!-- Add more languages -->
            </div>
        </div>
    </div>
</section>
@endsection
