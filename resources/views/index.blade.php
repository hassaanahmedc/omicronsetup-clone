<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">

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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/pageRedirection.js'])
</head>

<body class="bg-black">
    <div>
        <div class="px-8 flex items-center gap-8">
            <x-ibm />
            <div class="text-6xl font-bold text-white">
                <span class="block">Moravian</span>
                <span class="block">Microtrends</span>
            </div>
        </div>
        <div class="text-2xl text-white font-bold">
            <p id="txt-1" class="hidden">OMBIOS(C) 2020 Moravian Microtrends</p>
            <p id="txt-2" class="hidden">BIOS Date: Check your watch ¯\_(ツ)_/¯, Ver: 0.3</p>
            <p id="txt-3" class="mt-4 hidden"> Platinum XV Processor</p>
            <p id="txt-4" class="hidden"> You don't have to press DEL to run Setup</p>
            <p id="txt-5" class="hidden"> Checking NVRAM</p>
            <p id="txt-6" class="hidden">Pretended I found: 1 Keyboard, 1 Mouse, some other...stuff</p>
            <p id="txt-7" class="hidden"> Whoah, that's a lot of RAM</p>
            <div class="flex">
                <p id="txt-8" class="hidden">Auto-Detecting Pri Master..</p>
                <p id="txt-9" class="hidden"> IDE Hard Disk...Where is the SSD?</p>
            </div>
            <div class="flex">
                <p id="txt-10" class="hidden">Auto-Detecting his Slave...</p>
                <p id="txt-11" class="hidden"> ATARI CDROM...wait what?</p>
            </div>


            <p id="txt-12" class="hidden">Booting to BIOS in...<span id="countdown"></span> </p>
        </div>
    </div>

</body>

</html>
