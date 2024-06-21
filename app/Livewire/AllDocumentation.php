<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Documentation;

class AllDocumentation extends Component
{
    public $title;
    public $language;
    public $description;
    public $documents;



    // Define validation rules dynamically
    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    public function mount()
    {
        $this->documents = Documentation::all(); // Fetch all documents
    }

    public function delete($id)
    {
        $document = Documentation::findOrFail($id);
        $document->delete();
    }

    public function update()
    {
        $this->validate();

        $document = Documentation::find($this->documentId);
        $document->update([
            'title' => $this->title,
            'language' => $this->language,
            'description' => $this->description,
        ]);

        $this->emit('documentUpdated');

        $this->reset(['title', 'language', 'description']);


            return view('livewire.edit-documents', [
                'documents' => $this->documents
            ]);

    }

    public function render()
    {
        return view('livewire.all-documentation', [
            'documents' => $this->documents
        ]);
    }
}

