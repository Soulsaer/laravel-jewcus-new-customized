<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'alt',
    ];

    public function products(){
        return $this->hasMany(Product::class,'product_id');
    }

}
