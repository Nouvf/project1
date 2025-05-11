<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'descreption',
        'price',
<<<<<<< HEAD
        'stocke',
        'categories_id',
=======
        'stock',
        'categories2_id',
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
        'image',
    ];

    public function categoy()
    {
<<<<<<< HEAD
        return $this->belongsTo(categories2s::class);
=======
        return $this->belongsTo(categories2s::class,'categories2_id','id');
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
    }
}
