<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
}