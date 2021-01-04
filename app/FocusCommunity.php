<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusCommunity extends Model
{
    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 
    }
}
