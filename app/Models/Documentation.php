<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $table = 'documentation';
    use HasFactory;
    protected $fillable = ['title', 'language', 'description'];

    public function show($id)
    {
        // Fetch the documentation record by ID
        $documentation = Documentation::findOrFail($id);

        // Generate the URL for this documentation
        $documentationUrl = url("/documentation/{$documentation->id}");

        // Pass the $documentationUrl to your view
        return view('documentation.show', compact('documentation', 'documentationUrl'));
    }
}
