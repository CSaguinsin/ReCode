

<div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-[50px]">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-[32px] text-white">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-[32px] text-white">
                    Language
                </th>
                <th scope="col" class="px-6 py-3 text-[32px] text-white">
                    Date
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                        {{ $document->title }}
                    </th>
                    <td class="px-6 py-4 text-white">
                        {{ $document->language }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ $document->created_at->toFormattedDateString() }}
                    </td>
                    <div >
                        <td class="px-6 py-4 text-right text-white flex space-x-[32px] ">
                            <div x-data="{ open: false }">
                                <button @click="open = ! open" type="button">
                                    <img src="{{ asset('assets/elements/deleteLogo.png') }}" />
                                </button>

                                <!-- Modal for delete -->
                                <div x-show="open" tabindex="-1" class=" flex items-center justify-center fixed top-0 right-0 bottom-0 left-0 z-50 w-full h-full max-h-full overflow-hidden"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                >
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-[#050419] rounded-lg shadow dark:bg-gray-700">
                                            <button @click="open = false" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <div class="space-x-[16px] justify-center flex">
                                                    <img src="{{ asset('assets/elements/confirmDeletion.png') }}" />
                                                </div>
                                                <p class="font-bold text-[16px]">Confirm Deletion</p>
                                                <div class="mb-[16px]">
                                                    <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Note ?</h3>
                                                    <h4 class="text-[16px] font-normal text-gray-500 dark:text-gray-400">This action can’t be undone.</h4>
                                                </div>
                                                <div class="space-x-[32px]">
                                                    <button wire:click="delete({{ $document->id }})" @click="open = false" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Delete
                                                    </button>
                                                    <button @click="open = false" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium  text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of modal for delete -->
                            </div>

                                    <x-edit-logo/>
                        </td>
                    </div>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
