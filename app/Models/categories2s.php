<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories2s extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'id',
=======
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
        'name',
        'description',
        'icon',
    ];


    public function products()
    {
        return $this->hasMany(products::class);
    }
}
