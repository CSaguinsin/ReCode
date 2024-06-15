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
        <div class="p-6 text-right relative">
            <div x-data="{ open: false } ">
                <button @click="open = ! open">
                    <img src="{{ asset('assets/logo/settings.png') }}" class="h-[24px]" alt="Settings" />
                </button>

                <!-- Dropdown menu -->

                <div x-show="open" class="absolute z-10 bg-[#050419] divide-y divide-gray-100 rounded-[16px] shadow border border-custom-gray w-[395px] h-[233px] right-0"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">
                    <ul class="py-2 pl-[24px] text-sm text-gray-700 dark:text-gray-200">
                        <div class=" px-[24px] flex justify-center items-center pt-[22px] pb-[8px]">
                            <a href="{{ route('profile.addnew') }}" class="text-black font-semibold w-[347px] h-[46px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-[14px]  text-center inline-block">Add new</a>
                        </div>
                                <button class="flex items-center space-x-[8px] text-white py-2">
                                    <x-code-snippets />
                                    <div>
                                        Code Snippets
                                    </div>
                                </button>
                    </ul>
                    <ul class="py-2 pl-[24px] text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center space-x-[8px] text-white py-2">
                                <x-logout-logo />
                                <div>
                                    Logout
                                </div>
                            </button>
                        </form>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>
