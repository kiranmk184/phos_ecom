<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductReviewFactory;

class ProductReview extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'customer_id',
        'product_id',
        'title',
        'rating',
        'comment',
        'status',
    ];

    // protected static function newFactory(): ProductReviewFactory
    // {
    //     // return ProductReviewFactory::new();
    // }
}
