<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'url',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'description',
        'status',
    ];
}
