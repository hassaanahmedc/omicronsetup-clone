<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" >

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/darkmodConfig.js'])
</head>

<body class="font-sans antialiased bg-lightMd-background dark:bg-darkMd-background">
    @include('components.custom-nav')
    <!-- Page Content -->
    <main class="">
        <div
            class="absolute top-20 bottom-0 w-full border-8 border-solid border-transparent ">
            <div class=" border-4 border-black dark:border-darkMd-Nav_Bg h-screen">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
