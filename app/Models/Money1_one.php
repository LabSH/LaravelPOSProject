<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money1_one extends Model
{
    use HasFactory;
    protected $fillable = [
        'totalmoney',
        'totalorder'
    ];
}
