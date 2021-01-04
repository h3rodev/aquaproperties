<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Facades\Voyager;

class Banners extends Model
{
    public static function showBanners($for) 
    {
        return static::where('placement', '=', $for)
        ->where('status', '=', 'PUBLISHED')->get();
    }
}
