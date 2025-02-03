@extends('layouts.app')

@section('title', 'Codertype | Leaderboard')

@section('content')
<section class="min-h-screen px-4 pt-20 pb-12">
    <div class="max-w-7xl mx-auto">
        <!-- Leaderboard Header -->
        <div class="relative mb-12 group">
            <div class="bg-gradient-to-r from-violet-900/30 to-transparent p-8 rounded-2xl border border-white/10 backdrop-blur-xl shadow-2xl transition-all hover:border-violet-400/30">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div class="space-y-2">
                        <h1 class="text-4xl font-bold bg-gradient-to-r from-violet-300 to-teal-400 bg-clip-text text-transparent">Global Leaderboard</h1>
                        <p class="text-gray-400 font-sans text-lg">
                            Compete with <span x-text="totalParticipants"></span> developers worldwide
                        </p>
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="bg-white/5 px-4 py-2 rounded-lg border border-white/10">
                            <span class="text-teal-400 font-mono">Your Rank: #<span x-text="userRank"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters & Search -->
        <div x-data="{ activePeriod: 'alltime' }" class="mb-8 flex flex-col md:flex-row gap-4 justify-between">
            <div class="flex gap-2 flex-wrap">
                <button @click="activePeriod = 'daily'"
                        class="px-6 py-3 rounded-xl border transition-all flex items-center gap-2"
                        :class="activePeriod === 'daily' ?
                            'bg-gradient-to-br from-violet-900/50 to-violet-700/30 border-violet-400' :
                            'bg-white/5 border-white/10 hover:bg-white/10'">
                    <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Daily
                </button>
                <!-- Add other period buttons -->
            </div>
            <div class="relative max-w-md w-full">
                <input type="text"
                       placeholder="Search developers..."
                       class="w-full pl-12 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl focus:border-violet-400 focus:ring-2 focus:ring-violet-900/50 transition-all">
                <svg class="w-5 h-5 absolute left-4 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>

        <!-- Leaderboard Cards -->
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <!-- Total Participants -->
            <div class="bg-gradient-to-br from-violet-900/30 to-transparent p-6 rounded-2xl border border-white/10">
                <div class="flex items-center gap-4">
                    <div class="p-4 bg-violet-900/50 rounded-xl">
                        <svg class="w-8 h-8 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-400 mb-1">Total Coders</p>
                        <p class="text-3xl font-bold">12,459</p>
                    </div>
                </div>
            </div>

            <!-- Average WPM -->
            <div class="bg-gradient-to-br from-teal-900/30 to-transparent p-6 rounded-2xl border border-white/10">
                <div class="flex items-center gap-4">
                    <div class="p-4 bg-teal-900/50 rounded-xl">
                        <svg class="w-8 h-8 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-400 mb-1">Avg. Speed</p>
                        <p class="text-3xl font-bold">78 WPM</p>
                    </div>
                </div>
            </div>

            <!-- Top Language -->
            <div class="bg-gradient-to-br from-pink-900/30 to-transparent p-6 rounded-2xl border border-white/10">
                <div class="flex items-center gap-4">
                    <div class="p-4 bg-pink-900/50 rounded-xl">
                        <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-400 mb-1">Top Language</p>
                        <p class="text-3xl font-bold">JavaScript</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Leaderboard Table -->
        <div class="bg-white/5 rounded-2xl border border-white/10 backdrop-blur-lg">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-violet-900/20 to-transparent">
                        <tr>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">Rank</th>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">Developer</th>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">WPM</th>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">Accuracy</th>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">Consistency</th>
                            <th class="px-6 py-5 text-left text-sm text-gray-400 font-mono">Streak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Top Rank Example -->
                        <tr class="border-t border-white/10 hover:bg-white/5 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-gradient-to-br from-amber-500/30 to-transparent rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-xl bg-violet-900/30 flex items-center justify-center">
                                            <span class="text-xl font-bold text-violet-400">TS</span>
                                        </div>
                                        <div class="absolute -right-1 -bottom-1 bg-green-500 w-4 h-4 rounded-full border-2 border-gray-900"></div>
                                    </div>
                                    <div>
                                        <p class="font-bold">Top Scorer</p>
                                        <p class="text-sm text-gray-400">@topscorer_dev</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="text-teal-400 font-bold">142</span>
                                    <div class="h-2 bg-white/10 rounded-full w-24">
                                        <div class="h-full bg-teal-400 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-pink-400">98%</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="text-blue-400">94%</span>
                                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="text-purple-400">58 Days</span>
                                    <div class="flex -space-x-2">
                                        <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-500"></div>
                                        <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 opacity-75"></div>
                                        <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 opacity-50"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- More Rows with Variants -->
                    </tbody>
                </table>
            </div>

            <!-- Enhanced Pagination -->
            <div class="p-6 border-t border-white/10">
                <div class="flex justify-between items-center">
                    <div class="text-gray-400 text-sm">
                        Showing 1-10 of <span x-text="totalParticipants"></span> results
                    </div>
                    <div class="flex gap-2">
                        <button class="p-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button class="p-2 bg-violet-900/50 border border-violet-400 rounded-lg">1</button>
                        <button class="p-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 transition">2</button>
                        <button class="p-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 transition">3</button>
                        <button class="p-2 bg-white/5 border border-white/10 rounded-lg hover:bg-white/10 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Sections -->
        <div class="grid lg:grid-cols-2 gap-8 mt-12">
            <!-- Language Distribution -->
            <div class="bg-gradient-to-br from-white/5 to-transparent p-6 rounded-2xl border border-white/10">
                <h3 class="text-xl font-bold mb-6">Language Mastery</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-white/5 rounded-xl">
                        <div class="flex items-center gap-3">
                            <div class="w-3 h-3 rounded-full bg-teal-400"></div>
                            <span>JavaScript</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400">42%</span>
                            <div class="w-24 h-2 bg-white/10 rounded-full">
                                <div class="h-full bg-teal-400 rounded-full" style="width: 42%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more languages -->
                </div>
            </div>

            <!-- Recent Achievements -->
            <div class="bg-gradient-to-br from-white/5 to-transparent p-6 rounded-2xl border border-white/10">
                <h3 class="text-xl font-bold mb-6">Recent Unlocks</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-gradient-to-br from-violet-900/30 to-transparent rounded-xl border border-white/10 flex flex-col items-center group hover:border-violet-400 transition">
                        <div class="w-16 h-16 mb-4 bg-violet-900/30 rounded-xl flex items-center justify-center text-3xl transition group-hover:scale-110">
                            🏆
                        </div>
                        <span class="text-center text-sm mb-1">Speed Demon</span>
                        <span class="text-xs text-gray-400">150+ WPM</span>
                    </div>
                    <!-- Add more achievements -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
