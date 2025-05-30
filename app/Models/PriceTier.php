<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PriceTier extends Model
{
    protected $fillable = [
        'product_id',
        'min_quantity',
        'max_quantity',
        'price',
        'label'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
