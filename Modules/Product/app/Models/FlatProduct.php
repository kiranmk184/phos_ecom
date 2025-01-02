<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\FlatProductFactory;

class FlatProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'product_id',
        'sku',
        'product_number',
        'name',
        'description',
        'short_description',
        'new',
        'featured',
        'status',
        'price',
        'cost',
        'special_price',
        'special_price_from',
        'special_price_to',
        'color',
        'color_label',
        'size',
        'size_label',
        'weight',
        'width',
        'height',
        'depth',
        'locale',
        'channel',
        'min_price',
        'max_price',
        'meta_keywork',
        'meta_description',
    ];

    // protected static function newFactory(): FlatProductFactory
    // {
    //     // return FlatProductFactory::new();
    // }
}
