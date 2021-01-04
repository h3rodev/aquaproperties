<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 
    }
    public static function communityByDeveloper($devname, $count) 
    {
        $_devname = ucwords( str_replace('-', ' ', $devname) );
        return static::where('developer', '=', $_devname)
        ->orderBy('created_at', 'desc')->paginate($count);

    }
}
