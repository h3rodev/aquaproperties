<?php

namespace App\Http\Controllers;

use App\Banners;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banners::showBanners('HOME');
        
        return view('banners.index', ['banners' => $banners]  );
    }

}
