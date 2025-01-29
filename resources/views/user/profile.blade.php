@extends('layouts.app')

@section('title', 'Codertype | Profile Statistics')

@section('content')
<section class="min-h-screen px-4 pt-20">
    <div class="max-w-6xl mx-auto">
        <!-- Profile Header -->
        <div class="relative mb-12">
            <div class="flex items-center gap-6 bg-white/5 rounded-xl border border-white/10 p-6 backdrop-blur-lg">
                <div class="relative">
                    <div class="w-20 h-20 rounded-full bg-violet-900/30 flex items-center justify-center">
                        <span class="text-3xl font-bold text-violet-400">JD</span>
                    </div>
                    <div class="absolute -inset-2 bg-white/5 blur-xl z-0"></div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-1">John Developer</h2>
                    <p class="text-gray-400 font-mono text-sm">Joined: March 2023</p>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white/5 rounded-lg border border-white/10 p-6">
                <p class="text-gray-400 text-sm mb-2">Average WPM</p>
                <p class="text-3xl font-bold text-teal-400">72</p>
            </div>
            <div class="bg-white/5 rounded-lg border border-white/10 p-6">
                <p class="text-gray-400 text-sm mb-2">Accuracy</p>
                <p class="text-3xl font-bold text-pink-400">94%</p>
            </div>
            <div class="bg-white/5 rounded-lg border border-white/10 p-6">
                <p class="text-gray-400 text-sm mb-2">Highest Score</p>
                <p class="text-3xl font-bold text-blue-400">112</p>
            </div>
        </div>

        <!-- Progress Charts -->
        <div x-data="{ activeTab: 'week' }" class="mb-8">
            <div class="bg-white/5 rounded-xl border border-white/10 p-6">
                <div class="flex gap-4 mb-6">
                    <button @click="activeTab = 'day'"
                            :class="activeTab === 'day' ? 'bg-violet-900/50 border-violet-400' : 'border-transparent'"
                            class="px-4 py-2 rounded-lg border transition-all">
                        Daily
                    </button>
                    <button @click="activeTab = 'week'"
                            :class="activeTab === 'week' ? 'bg-violet-900/50 border-violet-400' : 'border-transparent'"
                            class="px-4 py-2 rounded-lg border transition-all">
                        Weekly
                    </button>
                    <button @click="activeTab = 'month'"
                            :class="activeTab === 'month' ? 'bg-violet-900/50 border-violet-400' : 'border-transparent'"
                            class="px-4 py-2 rounded-lg border transition-all">
                        Monthly
                    </button>
                </div>
                <div class="h-64" x-show="activeTab === 'week'">
                    <!-- Chart container (integrate your charting library here) -->
                    <div class="bg-black/20 rounded-lg p-4 h-full flex items-center justify-center text-gray-400">
                        WPM Progress Chart (Weekly)
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Tests -->
        <div class="bg-white/5 rounded-xl border border-white/10 p-6">
            <h3 class="text-xl font-bold mb-6">Recent Tests</h3>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-black/20">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm text-gray-400 font-mono">Date</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-400 font-mono">WPM</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-400 font-mono">Accuracy</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-400 font-mono">Language</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-400 font-mono">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-white/10">
                            <td class="px-4 py-3 text-sm">2023-07-20</td>
                            <td class="px-4 py-3 text-teal-400 font-bold">84</td>
                            <td class="px-4 py-3 text-pink-400">96%</td>
                            <td class="px-4 py-3">JavaScript</td>
                            <td class="px-4 py-3">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
                                <span class="ml-2">Completed</span>
                            </td>
                        </tr>
                        <!-- Add more rows -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Additional Stats -->
        <div class="grid md:grid-cols-2 gap-4 mt-8">
            <div class="bg-white/5 rounded-xl border border-white/10 p-6">
                <h4 class="text-lg font-bold mb-4">Practice Time</h4>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-400">Today</span>
                        <span class="text-blue-400">28 mins</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">This Week</span>
                        <span class="text-blue-400">3h 42m</span>
                    </div>
                </div>
            </div>
            <div class="bg-white/5 rounded-xl border border-white/10 p-6">
                <h4 class="text-lg font-bold mb-4">Achievements</h4>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full bg-violet-900/30 flex items-center justify-center">
                        🏆
                    </div>
                    <!-- Add more achievements -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
