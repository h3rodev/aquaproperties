<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Property;
use App\PropertyAmenities;
use App\PropertyFeatures;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banners::showBanners('HOME');
        $offplanBanners = Banners::showBanners('OFFPLAN');
        // return $banners;

        $featuredForRent = Property::featuredProperties('rent' , 4);
        $featuredForSale = Property::featuredProperties('sale', 4);
        $luxuryPropertiesForSale = Property::luxuryProperties('sale', 'townhouses', 4);
        $luxuryPropertiesForRent = Property::luxuryProperties('rent', 'villas', 4);

        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();

        return view('home', [
            'banners' => $banners, 
            'featuredForRent' => $featuredForRent, 
            'featuredForSale' => $featuredForSale, 
            'luxuryPropertiesForSale' => $luxuryPropertiesForSale, 
            'luxuryPropertiesForrent' => $luxuryPropertiesForRent, 
            'offplanBanners' => $offplanBanners,
            'amenities' => $amenities,
            'features' => $features,
            ]  );
    }
}
