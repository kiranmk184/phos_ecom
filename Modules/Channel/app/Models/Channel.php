<?php

namespace Modules\Channel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Channel\Database\Factories\ChannelFactory;

class Channel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'name',
        'description',
        'hostname',
        'logo',
        'favicon',
        'timezone',
        'default_locale_id',
        'is_maintenance_on',
        'root_category_id',
    ];

    // protected static function newFactory(): ChannelFactory
    // {
    //     // return ChannelFactory::new();
    // }
}
