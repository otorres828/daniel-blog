<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
        
    </body>
    
    <footer class="bg-gray-900">
        <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

            <div class="w-full mx-auto flex flex-wrap items-center">
                <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                    <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                        👻 <span class="text-base text-gray-200">Ghostwind CSS</span>
                    </a>
                </div>
                <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                    <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                        <li>
                            <a class="inline-block py-2 px-3 text-white no-underline" href="index.html">HOME</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">link</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">link</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                href="#">link</a>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    </footer>
</html>
