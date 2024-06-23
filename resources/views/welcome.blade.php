@extends('layouts.app')
@section('content')

    <div class="relative min-h-screen bg-[#050419] bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">
        @if (Route::has('login'))
            @include('livewire.welcome.navigation')
        @endif
    </div>
@endsection
