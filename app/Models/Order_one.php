<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_one extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_ones_id',
        'member_ones_id',
        'count',
        'total_price',
        'coment'
    ];
}
