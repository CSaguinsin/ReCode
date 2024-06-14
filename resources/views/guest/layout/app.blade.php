<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReCode - @yield('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-[#050419]">
    @if (Route::has('login'))
        @auth
            @include('livewire.authnavbar') <!-- Your navigation bar for authenticated users -->
        @else
            @include('livewire.welcome.navigation') <!-- Your navigation bar for guests -->
        @endauth
    @endif
    <main>
        @yield('content')
    </main>

    @include('livewire.welcome.footer')
</body>

</html>
