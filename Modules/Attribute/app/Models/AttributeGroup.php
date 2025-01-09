<?php

namespace Modules\Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Attribute\Database\Factories\AttributeGroupFactory;

class AttributeGroup extends Model
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
        'attribute_family_id',
        'name',
        'position',
        'is_user_defined'
    ];

    // protected static function newFactory(): AttributeGroupFactory
    // {
    //     // return AttributeGroupFactory::new();
    // }
}
