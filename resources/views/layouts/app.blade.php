<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'codertype | Code Typing Mastery')</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

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
    </style>

    @stack('styles')
</head>
<body class="min-h-screen relative">
    <div class="code-background"></div>

    <header class="fixed top-0 left-0 w-full z-50 bg-transparent py-4">
        <div class="container mx-auto px-4 flex items-center justify-between max-w-7xl">
            <a href="" class="flex items-center text-white hover:text-opacity-70 transition-all">
                <span class="font-bold font-sans text-lg">codertype</span>
            </a>
            <nav class="flex gap-6">
                @auth
                    <!-- Authenticated user navigation -->
                    <a href="" class="text-white hover:text-opacity-70">Dashboard</a>
                    <a href="" class="text-white hover:text-opacity-70">Logout</a>
                @else
                    <!-- Guest navigation -->
                    <a href="" class="text-white hover:text-opacity-70">Login</a>
                    <a href="" class="text-white hover:text-opacity-70">Register</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="relative z-10">
        @yield('content')
    </main>

    <footer class="bg-transparent py-8 border-t border-white/10">
        <div class="container px-4 flex flex-col md:flex-row items-center justify-between max-w-7xl mx-auto">
            <p class="text-sm text-gray-400 mb-4 md:mb-0">© {{ date('Y') }} codertype.</p>
            <nav class="flex gap-4">
                <a href="" class="text-sm text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                <a href="" class="text-sm text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
            </nav>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
