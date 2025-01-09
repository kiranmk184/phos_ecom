<?php

namespace Modules\Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Attribute\Database\Factories\AttributeFamilyFactory;

class AttributeFamily extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'code',
        'name',
        'status',
        'is_user_defined',
    ];

    // protected static function newFactory(): AttributeFamilyFactory
    // {
    //     // return AttributeFamilyFactory::new();
    // }
}
