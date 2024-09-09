<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Metal;
use App\Models\Gemstone;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'category_id', 
        'meta_title', 
        'meta_description', 
        'other_meta_info', 
        'product_sku', 
        'quantity', 
        'product_weight', 
        'price_in_india', 
        'price_in_us', 
        'special_price_india', 
        'special_price_us', 
        'url_key', 
        'metal_id', 
        'gemstone_id', 
        'plating', 
        'setting', 
        'stone_shape', 
        'stock_status', 
        'image'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function metal(){
        return $this->belongsTo(Metal::class,'metal_id');
    }

    public function gemstone(){
        return $this->belongsTo(Gemstone::class,'gemstone_id');
    }
}
