<?php

namespace Modules\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $casts = [
        'sizes' => 'array',
        'images' => 'array'
    ];
}
