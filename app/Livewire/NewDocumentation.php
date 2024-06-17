<?php

namespace App\Livewire;
use App\Models\Documentation;
use Livewire\Component;

class NewDocumentation extends Component
{
    public $title;
    public $language;
    public $description;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'language' => 'required',
            'description' => 'required',
        ]);

        Documentation::create([
            'title' => $this->title,
            'language' => $this->language,
            'description' => $this->description,
        ]);

        // Use Livewire's reset method to reset the properties
        $this->reset(['title', 'language', 'description']);

        session()->flash('message', 'Documentation added successfully.');
    }


    public function resetForm() {
        $this->title = '';
        $this->language = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.new-documentation');
    }
}
