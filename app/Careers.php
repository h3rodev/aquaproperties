<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $fillable = [
        'title', 'body', 'designation', 'status', 'feature_image', 'seo_title', 'meta_description', 'meta_keywords',
    ];

    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first();  
    }

}
