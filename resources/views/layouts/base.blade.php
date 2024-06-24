<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="/build/manifest.json" rel="manifest">
        <link href="/build/assets/app-CCLi5Phe.css" rel="stylesheet">
        <link href="/build/assets/app-qVBN5XO4.js" rel="stylesheet">

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('ReCode.png')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body >
        @yield('body')
    </body>
</html>
