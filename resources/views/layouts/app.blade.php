<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="theme-color" content="#ffffff">

    <title>{{ config('app.name', 'Solaru Form') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://use.typekit.net">
    <link rel="stylesheet" href="https://use.typekit.net/hid2qkv.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-100 text-black/50">
    @include('layouts.nav')

    <main class="max-w-7xl mx-auto z-0 lg:mt-20">
        {{ $slot }}
    </main>

    @include('layouts.footer')
</body>

</html>
