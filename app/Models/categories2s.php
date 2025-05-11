<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories2s extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'icon',
    ];


    public function products()
    {
        return $this->hasMany(products::class);
    }
}
