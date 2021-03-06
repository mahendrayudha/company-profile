<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name_product', 'slug', 'price', 'url', 'image', 'description', 'category_id'];

    public function category()
    {
        return $this->hasOne(CategoryProduct::class, 'id', 'category_id');
    }
}
