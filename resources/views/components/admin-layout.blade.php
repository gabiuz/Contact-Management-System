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
    <div class="px-8 py-4 flex items-center justify-between">
      <div class="flex gap-5 items-center">
        <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.5298 28.2589H14.7987V29.99H16.5298V28.2589Z" fill="url(#paint0_linear_128_216)" />
          <path d="M16.5298 25.5896H14.7987V27.3206H16.5298V25.5896Z" fill="url(#paint1_linear_128_216)" />
          <path d="M19.1997 28.2589H17.4667V29.99H19.1997V28.2589Z" fill="url(#paint2_linear_128_216)" />
          <path d="M19.1997 25.5896H17.4667V27.3206H19.1997V25.5896Z" fill="url(#paint3_linear_128_216)" />
          <path d="M34 32.0029H29.1982L28.6464 31.5475L19.3822 23.9003L17.1412 22.0517L15.7936 23.1385L5.37766 31.58L4.85489 32.0029H0L2.09106 30.3082L3.74592 28.9661L15.7936 19.2047L17.1574 18.0997L18.8107 19.4634L22.9781 22.9034L24.1156 23.8442L24.2076 23.9199L27.9555 27.0113L30.2723 28.9248L31.9217 30.2851L34 32.0029Z" fill="url(#paint4_linear_128_216)" />
          <path d="M6.03455 25.6492V25.7363L14.5436 18.8401V18.7548V9.73601L6.03455 17.576V25.6492Z" fill="url(#paint5_linear_128_216)" />
          <path d="M22.9782 0V21.5161L19.9483 19.0148V10.9137L15.7937 8.96227V5.23996L22.9782 0Z" fill="url(#paint6_linear_128_216)" />
          <path d="M24.2085 22.4447V22.53L27.9551 25.6228V25.5376V14.3167L24.2085 10.5682V22.4447Z" fill="url(#paint7_linear_128_216)" />
          <path d="M31.7282 22.5431C31.7282 24.4079 31.3796 26.195 30.7428 27.838L32.4256 29.2271C33.3182 27.1785 33.8128 24.9176 33.8128 22.5431C33.8128 15.8136 29.8388 9.99566 24.1156 7.31218V9.65073C28.6506 12.1637 31.7282 17.0018 31.7282 22.5431Z" fill="url(#paint8_linear_128_216)" />
          <path d="M27.9173 32.4187C25.2206 35.3977 21.3261 37.272 16.9996 37.272C12.6902 37.272 8.80524 35.411 6.1104 32.449L5.25952 33.1388H3.95569C7.0409 36.9309 11.7427 39.3566 16.9997 39.3566C22.2567 39.3566 26.9584 36.9309 30.0436 33.1388H28.791L27.9173 32.4187Z" fill="url(#paint9_linear_128_216)" />
          <path d="M3.27341 27.8855C2.62718 26.2292 2.27089 24.4269 2.27089 22.5432C2.27089 15.2187 7.64729 9.12592 14.6592 8.0021V5.89284C6.4913 7.03371 0.186279 14.0664 0.186279 22.5432C0.186279 24.9272 0.684679 27.1975 1.58485 29.2537L3.27341 27.8855Z" fill="url(#paint10_linear_128_216)" />
          <defs>
            <linearGradient id="paint0_linear_128_216" x1="15.6643" y1="28.2589" x2="15.6643" y2="29.99" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint1_linear_128_216" x1="15.6643" y1="25.5896" x2="15.6643" y2="27.3206" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint2_linear_128_216" x1="18.3332" y1="28.2589" x2="18.3332" y2="29.99" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint3_linear_128_216" x1="18.3332" y1="25.5896" x2="18.3332" y2="27.3206" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint4_linear_128_216" x1="17" y1="18.0997" x2="17" y2="32.0029" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint5_linear_128_216" x1="10.2891" y1="9.73601" x2="10.2891" y2="25.7363" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3888FB" />
              <stop offset="1" stop-color="#215195" />
            </linearGradient>
            <linearGradient id="paint6_linear_128_216" x1="19.386" y1="0" x2="19.386" y2="21.5161" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529" />
              <stop offset="1" stop-color="#73818F" />
            </linearGradient>
            <linearGradient id="paint7_linear_128_216" x1="26.0818" y1="10.5682" x2="26.0818" y2="25.6228" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3888FB" />
              <stop offset="1" stop-color="#215195" />
            </linearGradient>
            <linearGradient id="paint8_linear_128_216" x1="28.9642" y1="7.31218" x2="28.9642" y2="29.2271" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3888FB" />
              <stop offset="1" stop-color="#215195" />
            </linearGradient>
            <linearGradient id="paint9_linear_128_216" x1="16.9996" y1="32.4187" x2="16.9996" y2="39.3566" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3888FB" />
              <stop offset="1" stop-color="#215195" />
            </linearGradient>
            <linearGradient id="paint10_linear_128_216" x1="7.42272" y1="5.89284" x2="7.42272" y2="29.2537" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3888FB" />
              <stop offset="1" stop-color="#215195" />
            </linearGradient>
          </defs>
        </svg>

        <h1 class="font-brunoAce text-lg font-bold">
          <span class="text-gray-900">SixSeven</span>
          <span class="text-blue-600"> Realty</span>
        </h1>
      </div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 rounded transition-colors duration-200 flex items-center gap-1">Logout</button>
      </form>
    </div>
  </header>
  <div class="flex min-h-screen">
    <!-- Admin Sidebar -->
    <x-admin-sidebar-navigation />

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