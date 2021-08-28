<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="keywords" content="@yield('keywords')">
        <meta name="description" content="@yield('content')">
        <title>@yield('title')</title>
        <meta property="og:image" content="@yield('image')">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <header>@livewire('navigation-menu')</header>
        
        <main>
            @yield('MainContent')
        </main>

        <footer>@livewire('footer-menu')</footer>

        @stack('modals')

        @livewireScripts
    </body>
</html>
