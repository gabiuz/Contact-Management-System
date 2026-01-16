<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="px-8 py-4">
            <h1 class="font-brunoAce text-lg font-bold">
                <span class="text-gray-900">SixSeven</span>
                <span class="text-blue-600"> Realty</span>
            </h1>
        </div>
    </header>
    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar-navigation />

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen">

            <!-- Page Content -->
            <main class="flex-1 p-8">
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </div>
</body>

</html>