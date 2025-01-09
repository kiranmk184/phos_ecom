<?php

namespace Modules\Inventory\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Inventory\Database\Factories\InventoryFactory;

class Inventory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'name',
        'description',
        'contact_name',
        'contact_email',
        'contact_number',
        'contact_fax',
        'country',
        'state',
        'city',
        'street',
        'postal_code',
        'priority',
        'latitude',
        'longitude',
        'status',
    ];

    // protected static function newFactory(): InventoryFactory
    // {
    //     // return InventoryFactory::new();
    // }
}
