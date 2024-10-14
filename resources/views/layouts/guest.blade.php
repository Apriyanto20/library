<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/resources/assets/img/favicon.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

</head>

<body
    class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    {{-- <nav
        class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
        <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
    </nav> --}}
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <div>
            {{ $slot }}
        </div>
    </main>

</body>

<!-- plugin for scrollbar  -->
<script src="assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>
