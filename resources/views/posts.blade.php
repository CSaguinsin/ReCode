<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Implement Social Share Button in Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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
    <style>
        /* Center the social links */
        div#social-links {
            margin-left: 9rem;
            margin-right: 5rem;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            padding: 20px;
            margin: 1px;
            font-size: 30px;
            color: #ffffff;
        }
    </style>
    </head>
    <body class="bg-[#050419]">
        <div class="container mt-[10rem] justify-center">
            <div class="flex justify-center">
                <x-logo />
            </div>
            <div class="mb-[24px] justify-center">
                <h1 class="text-white text-center font-sans font-bold text-[48px]">Store 💾, Re-use🛠️, Repeat 🔁</h1>
                <p class="text-white text-center pt-4 font-sans text-[20px]">Share this document with your friends or colleages!</p>
            </div>
            <div id="social-links" class="mx-auto">
                {!! $shareComponent !!}
            </div>
        </div>
    </body>
</html>
