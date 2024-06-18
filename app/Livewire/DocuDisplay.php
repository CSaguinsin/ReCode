<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Documentation;

class DocuDisplay extends Component
{
    public $documentId;
    public $document;

    public function mount($documentId)
    {
        $this->documentId = $documentId;
        $this->document = Documentation::findOrFail($this->documentId);
    }

    public function render()
    {
        return view('livewire.docu-display', ['document' => $this->document]);
    }
}
