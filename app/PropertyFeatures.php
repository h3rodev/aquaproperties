<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFeatures extends Model
{
    //
    protected $fillable = [
        'reference',
        'com_private',
        'title',
        'slug'
    ];

    public static function findFeatures($ref, $type) 
    {
        return static::where('reference', $ref)
        ->where('com_private', $type)->first(); 
    }
}
