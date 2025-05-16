<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'image_url', 'order'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getImageUrlAttribute($value)
    {
        return $value ?: 'https://placehold.co/600x400?text=No+Image';
    }
}