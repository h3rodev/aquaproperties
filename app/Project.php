<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 
    }
}
