<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories2s extends Model
{
    
    use HasFactory;

    protected $table = 'categories2s';

    protected $fillable = ['name', 'description', 'icon'];

    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id');
    }
}
