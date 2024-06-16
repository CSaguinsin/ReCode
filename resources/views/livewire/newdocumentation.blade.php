<?php

use Livewire\Volt\Component;
use App\Models\CodeSnippet;

new class extends Component {
    public $title;
    public $language;
    public $description;

    public function save() {
    $validated = $this->validate([
        'title' => 'required',
        'description' => 'required',
        'language' => 'required',
    ]);


    CodeSnippet::create($validated);


    $this->reset(['title', 'description', 'language']);
    session()->flash('message', 'Code snippet saved successfully.');
}

}; ?>

<div class="max-w-screen-xl mx-auto pt-[8px] pb-[5rem]">
    <div class="border-[#303030] justify-center rounded-[16px] box-content h-[842px] w-[1223px] py-[24px] px-[24px] p-4 border-2">
        {{-- first section --}}
        <section>
            <div>
                <a href="{{ route('profile') }}">
                    <x-back-button />
                </a>
            </div>
            <div class="pt-[4rem]">
                <input label="Title" type="text" id="large-input" class="block w-full p-4 text-white  rounded-lg bg-transparent dark:bg-transparent">
            </div>
        </section>
        {{-- end of section --}}
    </div>
</div>
