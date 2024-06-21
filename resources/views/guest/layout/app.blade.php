<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReCode - @yield('title')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- script for Quill javascript library --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.5/dist/quill.js"></script>
    {{-- end --}}

    {{-- script for laravel share --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    {{-- end --}}

    @livewireStyles
    <!-- Other head content -->
    @livewireScripts
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/js/app.js')
</head>
<body class="bg-[#050419]">
    @if (Route::has('login'))
        @auth
            @include('livewire.sidebar') <!-- navigation bar for authenticated users -->
        @else
            @include('livewire.welcome.navigation') <!-- navigation bar for guests -->
        @endauth
    @endif
    <main>
        @yield('content')
    </main>

    @guest
        @include('livewire.welcome.footer') <!-- this footer is only visible for guest -->
    @endguest


</body>

</html>
