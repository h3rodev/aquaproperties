<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communities extends Model
{
    
    protected $fillable = [
        'community_id',
        'community_name',
        'sub_community_name',
        'community_desc',
        'sub_community_desc',
        'property_developer',
        'loc_geo',
        'sub_loc_geo',
    ];

    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 
    }
}
