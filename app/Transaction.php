<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Products;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'customer_name',
        'customer_contact',
        'size',
        'quantity',
        'status',
    ];

    public function product()
{
    return $this->belongsTo(Products::class, 'product_id');
}

public function user()
    {
        return $this->belongsTo(User::class);
    }

}
