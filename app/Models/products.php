<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'descreption',
        'price',
        'stocke',
        'categories_id',
        'stock',
        'image',
    ];

    public function categoy()
    {
        return $this->belongsTo(categories2s::class,'categories_id');

    }
}
