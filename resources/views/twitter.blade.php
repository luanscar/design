<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'dark': darkMode === true }"
      x-data="{ darkMode: false, toggle() { this.open = !this.open } }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased h-full bg-black-100">

<div class="min-[1279px]:hidden h-screen justify-center items-center text-white">O site não oferece suporte para
    dispositivos
    moveis ou
    telas menores que 1280px
</div>

<div class="h-full hidden container mx-auto xl:grid grid-cols-4 text-white pt-6 ">
    {{--RIGT SIDE--}}
    <x-left.side />
    {{--END RIGHT SIDE--}}

    {{--CENTER FEED--}}
    <div class="col-span-2 space-y-10">
        {{--MENU BAR--}}
        <div class="flex justify-center items-center gap-12">
            <x-menu.item icon="home" :active="false"/>
            <x-menu.item icon="comment" :active="false"/>
            <x-menu.item icon="bell" :active="false"/>
            <x-menu.item icon="favorite" :active="false"/>
        </div>
        {{--END MENU BAR--}}

        <div class="w-full overflow-y-auto">

            <div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div>
            <div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div><div class="bg-black-300 mt-24">
                <x-avatar class="w-16 h-16 rounded-2xl border-4"/>
            </div>
        </div>


    </div>
    {{--END CENTER FEED--}}

    <div class="relative">3</div>
</div>


</body>

</html>




