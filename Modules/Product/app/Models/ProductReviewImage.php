<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductReviewImageFactory;

class ProductReviewImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'product_review_id',
        'type',
        'path',
    ];

    // protected static function newFactory(): ProductReviewImageFactory
    // {
    //     // return ProductReviewImageFactory::new();
    // }
}
