<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Documentation;

class AllDocumentation extends Component
{
    public $documents;

    public function mount()
    {
        $this->documents = Documentation::all(); // Fetch all documents
    }

    public function delete($id) {
        $document = Documentation::findOrFail($id);
        $document->delete();
    }


    public function render()
    {
        return view('livewire.all-documentation', [
            'documents' => $this->documents
        ]);
    }
}

