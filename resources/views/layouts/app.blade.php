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
        <link rel="stylesheet" href="assets/css/uikit.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            @if ($message = Session::get('success'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ $message }}</p>
                </div>

            @endif
            @error('title')
            <div class="uk-alert-danger" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>{{ $message }}</p>
            </div>
            @enderror
            <main>
                {{ $slot }}
                @yield('form')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <link rel="stylesheet" href="assets/css/uikit.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </body>
    @yield('scripts')
</html>
