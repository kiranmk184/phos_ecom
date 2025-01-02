<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductVideoFactory;

class ProductVideo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'product_id',
        'type',
        'path',
    ];

    // protected static function newFactory(): ProductVideoFactory
    // {
    //     // return ProductVideoFactory::new();
    // }
}
