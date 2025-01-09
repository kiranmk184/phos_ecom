<?php

namespace Modules\Channel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Channel\Database\Factories\SliderFactory;

class Slider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'image',
        'content',
        'channel_id',
        'locale',
        'link',
        'position',
        'status',
        'expired_at',
    ];

    // protected static function newFactory(): SliderFactory
    // {
    //     // return SliderFactory::new();
    // }
}
