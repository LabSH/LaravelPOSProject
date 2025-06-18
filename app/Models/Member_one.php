<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member_one extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid',
        'pw',
        'name',
        'phone',
        'rank'
    ];
}
