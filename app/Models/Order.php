<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_level_id', 'paper_type_id', 'subject_id', 'topic', 'instructions',
        'english_type', 'style_id', 'discount_amount', 'discount_id', 'file_path',
        'urgency_id', 'pages', 'spacing', 'sources', 'charts', 'slides',
        'writer_category_id', 'feature_ids', 'phone', 'email','total_price'
    ];

    protected $casts = [
        'feature_ids' => 'array',
    ];
}

