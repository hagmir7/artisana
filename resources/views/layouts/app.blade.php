<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="Lamssa Fashion">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/rounded-logo.png" />

    <link rel="canonical" href="{{ request()->path() }}">

    <meta name="description" content="#!">
    <meta name="image" content="/assets/imgs/rounded-logo.png">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="#!">
    <meta property="og:locale" content="fr">
    <meta property="og:image" content="/assets/imgs/rounded-logo.png">
    <meta property="og:url" content="{{ request()->path() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="/assets/imgs/rounded-logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/assets/imgs/rounded-logo.png">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="#!">
    <title>{{ $title }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50">
    <x-nav />
    @yield('content')
    <x-footer />
    {{-- @livewire('login') --}}
</body>

</html>
