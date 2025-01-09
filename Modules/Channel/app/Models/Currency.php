<?php

namespace Modules\Channel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Channel\Database\Factories\CurrencyFactory;

class Currency extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'name',
        'symbol',
    ];

    // protected static function newFactory(): CurrencyFactory
    // {
    //     // return CurrencyFactory::new();
    // }
}
