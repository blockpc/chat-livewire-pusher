<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            [x-cloak] { 
                display: none !important;
            }
        </style>

        @stack('styles')
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100 font-sans antialiased scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">
        <div class="min-h-screen pt-16 flex flex-col justify-between">
            @include('layouts.nav')

            <!-- Page Heading -->
            <header class="bg-white dark:bg-gray-800 shadow" id="header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Chat With Livewire & Pusher
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8 p-2 flex-1" id="main">
                @yield('content')
            </main>

            <footer class="mt-6">
                <div class="flex justify-between items-center max-w-7xl mx-auto p-4 text-sm md:text-lg">
                    <div class="font-bold flex">
                        <span>@2021</span> 
                        <a class="flex items-center ml-2" href="https://twitter.com/blockpc_cl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg>
                            <span class="ml-1">BlockPC</span>
                        </a>
                    </div>
                    <div class="">
                        Desarrollo Web
                    </div>
                </div>
            </footer>
        </div>

        @stack('scripts')
        @livewireScripts
    </body>
</html>
