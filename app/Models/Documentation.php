<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $table = 'documentation';
    use HasFactory;
    protected $fillable = ['title', 'language', 'description'];

}
