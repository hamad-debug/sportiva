<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Mass assignable fields
    protected $fillable = [
        'name',
    ];

    // Relationship: one category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}