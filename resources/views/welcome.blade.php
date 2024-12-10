<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codertype | Code Typing Mastery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg-primary: #0f172a;
            --text-primary: #f8fafc;
            --accent-primary: #6366f1;
            --accent-secondary: #4338ca;
        }
        body {
            background-color: black;
            color: white;
            overflow-x: hidden;
        }
        .code-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(45deg, rgba(46, 16, 101, 0.6), rgba(46, 16, 101, 0.8)),
                repeating-linear-gradient(
                    0deg,
                    rgba(255,255,255,0.1) 0px,
                    rgba(255,255,255,0.1) 1px,
                    transparent 1px,
                    transparent 10px
                ),
                repeating-linear-gradient(
                    90deg,
                    rgba(255,255,255,0.1) 0px,
                    rgba(255,255,255,0.1) 1px,
                    transparent 1px,
                    transparent 10px
                );
            z-index: -1;
            opacity: 0.7;
        }
        .terminal-cursor {
            animation: blink 1s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</head>
<body class="min-h-screen relative">
    <div class="code-background"></div>

    <header class="fixed top-0 left-0 w-full z-50 bg-transparent py-4">
        <div class="container mx-auto px-4 flex items-center justify-between max-w-7xl">
            <a href="#" class="flex items-center text-white hover:text-opacity-70 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <span class="font-bold text-lg">codertype</span>
            </a>
            <nav class="flex gap-6">
                <!-- TODO: LOGIN STUFF / USER STUFF -->
            </nav>
        </div>
    </header>

    <main class="relative z-10">
        <section class="min-h-screen flex items-center justify-center px-4 pt-20">
            <div class="max-w-4xl mx-auto text-center">
                <div class="relative inline-block mb-6">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 relative z-10">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-primary to-accent-secondary">
                            Master Developer
                        </span>
                        <br/>
                        Typing Speed
                    </h1>
                    <div class="absolute -top-4 -left-4 -right-4 -bottom-4 bg-white/5 blur-2xl z-0"></div>
                </div>

                <div class="max-w-xl mx-auto">
                    <!-- TODO: Search for a better font -->
                    <p class="text-xl text-gray-300 mb-10">
                    Improve your coding efficiency with targeted typing practice for <i>programmers</i>.
                    </p>

                    <div class="flex justify-center space-x-4">
                        <a href="/account" class="bg-violet-900 text-white px-8 py-4 rounded-lg hover:bg-violet-950 transition-all font-semibold shadow-lg hover:shadow-xl relative overflow-hidden group">
                            <span class="relative z-10">Start typing</span>
                            <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        </a>
                    </div>
                </div>

                <div class="mt-16 relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 top-0 w-60 h-60 bg-accent-primary/20 rounded-full blur-3xl"></div>
                    <div class="relative z-10 bg-white/5 rounded-xl border border-white/10 p-6 max-w-2xl mx-auto">
                        <!-- TODO: Change font to Monaspace -->
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

    <footer class="bg-transparent py-8 border-t border-white/10">
        <div class="container px-4 flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto">
            <p class="text-sm text-gray-400 mb-4 md:mb-0">© 2024 codertype.</p>
            <nav class="flex gap-4">
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
            </nav>
        </div>
    </footer>
</body>
</html>
