<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'descreption',
        'price',
        'stock',
        'categories2_id',
        'image',
    ];
}
