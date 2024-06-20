@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')


    <div class="max-w-screen-xl mx-auto pt-[8px] pb-[5rem]">
        <div class="border-[#303030] justify-center rounded-[16px] box-content h-[842px] w-[1223px] py-[24px] px-[24px] p-4 border-2">
            <div class="flex space-x-[467px] pl-[56px] pr-[116px] pt-4 ">
                <h1 class="text-white font-sans font-bold text-[48px]">Store 💾, Re-use🛠️, Repeat 🔁</h1>
                <a href="{{ route('profile.addnew') }}" class="text-black font-semibold w-[400px] h-[46px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-[14px] text-center flex items-center justify-center">
                    <x-add-newbutton />
                    {{ "Add new "}}
                </a>
            </div>
            <livewire:all-documentation />
            
        </div>
    </div>


@endsection
