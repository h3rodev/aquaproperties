<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyAmenities extends Model
{
    protected $fillable = [
        'reference',
        'com_private',
        'title',
        'slug'
    ];

    public static function findAmenities($ref, $type) 
    {
        return static::where('reference', $ref)
        ->where('com_private', $type)->first(); 
    }
}
