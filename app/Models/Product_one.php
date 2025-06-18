<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_one extends Model
{
    use HasFactory;
    protected $fillable = [
        'gubuns_ones_id',
        'name',
        'price',
        'pic'
    ];
}
