@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')


<div class="w-[1000px] mx-auto pt-[8px] pb-[5rem]">
    <div class="flex w-[700px] pl-[100px] pr-[116px] pt-[48px] justify-center">
        <h1 class="text-white font-sans font-bold text-[48px]">Store 💾, Re-use🛠️, Repeat 🔁</h1>
    </div>
    <div class="border-[#050419]  lg:justify-center rounded-[16px] box-content h-[842px] w-[800px] py-[24px] px-[24px] p-4 border-2 mx-auto">
        <livewire:all-documentation />
    </div>
</div>

@endsection
