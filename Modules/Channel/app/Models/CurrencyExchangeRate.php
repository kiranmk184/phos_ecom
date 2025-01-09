<?php

namespace Modules\Channel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Channel\Database\Factories\CurrencyExchangeRateFactory;

class CurrencyExchangeRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'rate',
        'currency_id',
    ];

    // protected static function newFactory(): CurrencyExchangeRateFactory
    // {
    //     // return CurrencyExchangeRateFactory::new();
    // }
}
