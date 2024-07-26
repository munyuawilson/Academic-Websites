<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'samples';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'title',
        'content',
    ];

    // Specify attributes that should be hidden from arrays
    protected $hidden = [
        // Add attributes to be hidden from arrays, if any
    ];

    // Define any castings or custom accessors/mutators if needed
    protected $casts = [
        // Example: 'is_active' => 'boolean',
    ];
}
