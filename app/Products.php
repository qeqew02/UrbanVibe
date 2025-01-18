<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id_category',
        'title',
        'photo',
        'crafter',
        'description',
        'price',
        'size',
        'stok',
    ];
}
