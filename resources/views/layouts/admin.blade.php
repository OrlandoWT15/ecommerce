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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased ">
        

        <div class="flex flex-col sm:flex-row min-h-screen">
            <div class="sm:w-3/12 h-16 sm:h-auto bg-green-200">
            menu
            </div>

            <div class="sm:w-9/12 bg-blue-900 py-3 sm:px-3 ">

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <!-- Page Content-->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>