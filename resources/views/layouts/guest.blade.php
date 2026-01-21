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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: url('/images/register-login-bg.jpg'); background-size: cover; background-position: center;">
        <h1 class="font-brunoAce text-8xl font-bold mb-4 text-center bg-gradient-to-b from-[#3888FB] to-[#215195] bg-clip-text text-transparent"><span class="bg-gradient-to-b from-black to-[#666666] bg-clip-text text-transparent">SixSeven</span> Realty</h1>
        <h2 class="font-brunoAce text-4xl font-normal bg-gradient-to-b from-black to-[#666666] bg-clip-text text-transparent text-center uppercase">contact management system</h2>
        <div class="w-full md:max-w-2xl sm:max-w-md sm:max-h-full mt-6 px-16 py-12 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>