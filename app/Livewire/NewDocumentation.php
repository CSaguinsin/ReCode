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

        // Explicitly reset form fields
        $this->resetForm();

        session()->flash('message', 'Documentation added successfully.');

        return redirect('/profile');

    }

    private function resetForm()
    {
        $this->title = '';
        $this->language = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.new-documentation');
    }
}
