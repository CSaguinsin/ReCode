<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <x-recode-logo />
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <div class="p-6 text-right ">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                {{-- <button type="submit" class="text-black font-semibold ml-4 bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Log Out') }}</button> --}}

            </form>
            <div x-data="{ open: false }">
                <button @click="open = ! open">
                    <img src="{{ asset('assets/logo/settings.png') }}" class="h-[24px]" alt="Settings" />
                </button>
                
                <!-- Dropdown menu -->
                <div x-show="open" class="z-10 bg-[#050419] divide-y divide-gray-100 rounded-[16px] shadow border border-custom-gray w-[395px] h-[233px]"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">
                    <ul class="py-2 pl-[24px] text-sm text-gray-700 dark:text-gray-200">
                        <div class=" px-[24px] flex justify-center items-center pt-[22px] pb-[8px]">
                            <button type="button" class="text-black font-semibold w-[347px] h-[46px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center">Add new</button>
                        </div>                        
                        <li>    
                            <div class="flex items-center space-x-[8px]"> 
                                <x-code-snippets />
                                <a href="#" class="text-white block px-4 py-2">Code Snippets</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="py-2 pl-[24px] text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf <!-- Make sure to include the CSRF token -->
                            <button type="submit" class="flex items-center space-x-[8px] text-white  px-4 py-2"> 
                                <x-logout-logo />
                                Logout
                            </button>
                        </form>
                    </ul>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
