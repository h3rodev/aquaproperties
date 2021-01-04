<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 

    }

    public static function offplanByArea($area, $count) 
    {
        $_area = ucwords( str_replace('-', ' ', $area) );
        return static::where('community', '=', $_area)
        ->orderBy('created_at', 'desc')->paginate($count);

    }
}
