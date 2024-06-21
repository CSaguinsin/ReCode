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

<div>
<!-- Navigation Toggle -->
<button type="button" class="text-gray-500 hover:text-gray-600 lg:hidden"  data-hs-overlay="#docs-sidebar" aria-controls="docs-sidebar" aria-label="Toggle navigation">
    <span class="sr-only">Toggle Navigation</span>
    <svg class="flex-shrink-0 size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>
  </button>
  <!-- End Navigation Toggle -->

  <!-- Sidebar -->
  <div id="docs-sidebar" class="hs-overlay [--auto-close:lg]  hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 border-[#303030] border-e pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex justify-center">
        <x-logo />
    </div>
    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
      <ul class="space-y-1.5">
        <li>
            <a href="{{ route('profile') }}" class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-[#303030] dark:bg-neutral-700 dark:text-white" href="#">
            <x-dashboard-logo />
            {{ "Dashboard" }}
          </a>
        </li>

        <li class="hs-accordion" id="users-accordion">
          <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm">
            <a href="{{ route('profile.addnew') }}" class="text-black font-semibold w-[150px] h-[48px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-[14px] text-center flex items-center justify-center">
                <x-add-newbutton />
                {{ "Add new "}}
            </a>
          </button>

          <div id="users-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
            <ul class="hs-accordion-group ps-3 pt-2" data-hs-accordion-always-open>
            </ul>
          </div>
        </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm  text-white rounded-lg hover:bg-[#303030] dark:bg-neutral-700 dark:text-white">
                    <x-logout-logo />
                    {{ "Logout" }}
                </button>
            </form>
        <li class="hs-accordion" id="projects-accordion">
        <a href="{{ route('profile') }}">
            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm  text-white rounded-lg hover:bg-[#303030] dark:bg-neutral-700 dark:text-white">
                <x-code-snippets />
                {{ "Code Snippets" }}
          </button>
        </a>
        </li>
        <li>
            <a href="https://github.com/CSaguinsin/ReCode" target="_blank" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm  text-white rounded-lg hover:bg-[#303030] dark:bg-neutral-700 dark:text-white">
                <x-documentation-logo />
                {{ "Project Documentation" }}
            </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
  <!-- End Sidebar -->
