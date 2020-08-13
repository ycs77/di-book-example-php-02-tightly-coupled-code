<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// ---- Code Listing 2.1 ----
class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'unit_price', 'is_featured',
    ];

    protected $casts = [
        'unit_price' => 'float',
        'is_featured' => 'boolean',
    ];
}
