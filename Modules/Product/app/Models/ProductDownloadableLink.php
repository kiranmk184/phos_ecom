<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ProductDownloadableLinkFactory;

class ProductDownloadableLink extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'product_id',
        'url',
        'file',
        'file_name',
        'type',
        'price',
        'sample_url',
        'sample_file',
        'sample_file_name',
        'sample_type',
        'downloads',
        'sort_order',
    ];

    // protected static function newFactory(): ProductDownloadableLinkFactory
    // {
    //     // return ProductDownloadableLinkFactory::new();
    // }
}
