<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="antialiased sans-serif bg-gray-100 flex w-full items-center min-h-screen">
        <div class="max-w-6xl mx-auto pt-4 pb-8 px-4 overflow-hidden w-full">
                <div class="md:flex md:flex-wrap">
                    <div class="md:w-1/3 md:mx-auto">
                        <div class="rounded bg-white shadow p-6 border-t-8 border-violet-500">
                            <h1 class="text-2xl text-gray-800 mb-1 font-bold leading-tight"><span class="text-violet-500">Log in</span> and start typing!</h1>
                            <p class="text-gray-600 mb-4 text-sm">Become a faster coder with <b class="text-violet-500"> codertype </b></p>
                            <form method="POST" action="{{ route('account.login') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="font-bold mb-1 block text-gray-700">Name</label>
                                    <div class="relative">
                                        <input
                                            name="name"
                                            id="name"
                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                            type="text"
                                            placeholder="Alice"
                                        >
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="email" class="font-bold mb-1 block text-gray-700">Email</label>
                                    <div class="relative">
                                        <input
                                            name="email"
                                            id="email"
                                            class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                            type="text"
                                            placeholder="alice@wonderland.world"
                                        >
                                    </div>
                                </div>
                                <button type="submit"
                                    class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded-lg w-full">
                                        <div>Log in</div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
