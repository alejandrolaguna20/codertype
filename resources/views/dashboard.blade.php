@extends('layouts.app')

@section('title', 'CodeType | Typing Test')

@section('content')
<div x-data="typingTest()"
     x-init="init()"
     x-on:keydown.window.prevent="handleKeyPress($event)"
     class="min-h-screen text-white flex flex-col relative">

    <!-- Progress Bar -->
    <div class="h-1 bg-white/5 fixed top-0 left-0 right-0">
        <div class="h-full bg-violet-600 transition-all duration-1000"
             :style="`width: ${(timeElapsed / selectedDuration) * 100}%`"></div>
    </div>

    <main class="flex-grow flex items-center justify-center px-4 py-8">
        <div class="w-full max-w-3xl">
            <!-- Stats Header -->
            <div class="flex justify-between mb-6 text-gray-400 font-mono">
                <div class="flex space-x-4">
                    <span>WPM: <span class="text-white font-bold" x-text="liveWPM"></span></span>
                    <span>ACC: <span class="text-white font-bold" x-text="`${accuracy}%`"></span></span>
                    <span>TIME: <span class="text-white font-bold" x-text="`${selectedDuration}s`"></span></span>
                </div>
                <div class="flex space-x-4">
                    <span class="text-white font-bold" x-text="selectedLanguage"></span>
                    <span x-show="isRunning" class="text-green-400">● LIVE</span>
                </div>
            </div>

            <!-- Code Display -->
                <div class="bg-white/5 rounded-xl border border-white/10 p-6 min-h-min relative overflow-hidden"
                     x-on:click="focusInput">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent opacity-0 transition-opacity"
                         :class="{'animate-scan': isRunning}"></div>

                    <!-- Character Container -->
                    <div class="relative z-10 font-mono font-bold break-all">
                      <template x-for="(char, index) in renderedLetters" :key="index">
                        <span
                          :class="getCharClasses(index)"
                          class="transition-all duration-300 rounded-sm align-top m-0"
                          :data-index="index"
                        ><template x-if="char === ' '">
                            <span class="text-gray-500 text-2xl px-[2px]">·</span>
                        </template><template x-if="char === '\n'">
                            <span class="text-gray-300 text-2xl px-2 after:content-[''] after:block after:mb-1">↩</span>
                        </template><span x-text="char"
                                x-show="char !== ' ' && char !== '\n'"
                                class="inline-block text-2xl"></span></span>
                      </template>
                    </div>
                    <!-- Hidden Input -->
                    <input type="text"
                           x-ref="input"
                           class="absolute opacity-0 -top-96"
                           x-model="userInput"
                           @focus="startTest"
                           @blur="pauseTest">
                </div>

            <!-- Controls -->
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                <template x-for="duration in [15, 30, 60]">
                    <button @click="setDuration(duration)"
                            class="px-4 py-2 border rounded-lg transition-all"
                            :class="{
                                'bg-violet-800 border-violet-400': duration === selectedDuration,
                                'bg-white/5 border-white/10 hover:bg-white/15': duration !== selectedDuration
                            }">
                        <span x-text="`${duration}s`"></span>
                    </button>
                </template>

                <select class="px-4 py-2 bg-white/5 border border-white/10 rounded-lg text-white"
                        x-model="selectedLanguage">
                    <option>JavaScript</option>
                    <option>Python</option>
                    <option>C</option>
                </select>
            </div>

            <!-- Results Modal -->
            <div x-show="showResults" class="fixed inset-0 bg-black/75 flex items-center justify-center">
                <div class="bg-gray-900 rounded-xl p-8 max-w-md w-full border border-white/10">
                    <h2 class="text-2xl font-bold mb-6">Test Results</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-400">WPM:</span>
                            <span class="text-2xl text-violet-400" x-text="finalWPM"></span>
                        </div>
                        <!-- Add more result metrics -->
                    </div>
                    <div class="mt-8 flex justify-end gap-4">
                        <button @click="restartTest"
                                class="px-6 py-3 bg-violet-800 hover:bg-violet-700 rounded-lg transition">
                            Try Again
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
function typingTest() {
    return {
        isRunning: false,
        showResults: false,
        userInput: '',
        selectedLanguage: 'JavaScript',
        selectedDuration: 60,
        timeElapsed: 0,
        startTime: null,
        currentIndex: 0,
        errors: new Set(),
        accuracy: 100,
        liveWPM: 0,
        letters: [],
        renderedLetters: [],

        init() {
            this.loadSnippet();
            this.$nextTick(() => this.focusInput());
        },

        loadSnippet() {
            const snippet = `function calculateFactorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    }
    return n * calculateFactorial(n - 1);
}`;
            this.letters = [...snippet];
            this.renderedLetters = this.letters.map(char => char);
        },

        focusInput() {
            this.$refs.input.focus();
        },

        startTest() {
            if (!this.isRunning) {
                this.isRunning = true;
                this.startTime = Date.now();
                this.updateTimer();
            }
        },

        handleKeyPress(event) {
            if (!this.isRunning || this.showResults) return;

            const key = event.key;
            const currentChar = this.letters[this.currentIndex];
            const isTabGroup = this.checkTabGroup();

            // Handle special keys
            if (isTabGroup && key === 'Tab') {
                event.preventDefault();
                this.handleTab();
                return;
            }

            if (key === 'Backspace') {
                this.handleBackspace();
                return;
            }

            // Handle regular input
            if (key === currentChar || (key === 'Enter' && currentChar === '\n')) {
                this.currentIndex++;
                if (this.currentIndex >= this.letters.length) {
                    this.endTest();
                }
            } else {
                this.errors.add(this.currentIndex);
            }

            this.updateMetrics();
        },

        checkTabGroup() {
            return this.letters.slice(this.currentIndex, this.currentIndex + 4).join('') === '    ';
        },

        handleTab() {
            this.currentIndex += 4;
            if (this.currentIndex >= this.letters.length) {
                this.endTest();
            }
        },

        handleBackspace() {
            this.currentIndex = Math.max(0, this.currentIndex - 1);
            this.errors.delete(this.currentIndex);
        },

        getCharClasses(index) {
            return {
                'bg-violet-900/30': index === this.currentIndex,
                'text-gray-400 opacity-50': index < this.currentIndex,
                'text-red-400 underline': this.errors.has(index),
                'text-gray-500': this.letters[index] === ' ' || this.letters[index] === '\n'
            };
        },

        updateMetrics() {
            // Add your WPM and accuracy calculations here
        },

        endTest() {
            this.isRunning = false;
            this.showResults = true;
        },

        restartTest() {
            this.currentIndex = 0;
            this.errors.clear();
            this.timeElapsed = 0;
            this.showResults = false;
            this.focusInput();
        }
    }
}
</script>

<style>
.animate-scan {
    animation: scan 3s linear infinite;
}

@keyframes scan {
    0% { opacity: 0; transform: translateX(-100%); }
    50% { opacity: 1; }
    100% { opacity: 0; transform: translateX(100%); }
}
</style>
@endsection
