<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Property;
use App\Communities;
use App\Member;
use App\PropertyAmenities;
use App\PropertyFeatures;

class TheSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luxApartments= Property::selectionPropertiesByType('sale', 'apartments');
        $luxVillas = Property::selectionPropertiesByType('sale', 'villas');
        $luxTownhouses = Property::selectionPropertiesByType('sale', 'townhouses');

        $groupByPropertyType = Property::all()->groupBy('property_type');
        $groupByPropertyFor = Property::all()->groupBy('property_for');
        $groupByCategories = Property::all()->groupBy('category_name');

        $groupByBed= Property::all()->groupBy('beds')->sortDesc();
        $groupByBath = Property::all()->groupBy('baths');
        $groupBySize = Property::all()->groupBy('build_up_area');

        $groupByPrice = Property::all()->groupBy('price');

        $groupByLocName = Property::all()->groupBy('loc_name');
        $groupBySubLocName = Property::all()->groupBy('sub_loc_name');

        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();

        return view('the-selection.selection', [
                'luxApartments' => $luxApartments, 
                'luxVillas' => $luxVillas, 
                'luxTownhouses' => $luxTownhouses,
                'groupByCategories' => $groupByCategories, 
                'groupByLocName' => $groupByLocName, 
                'groupBySubLocName' => $groupBySubLocName,
                'groupByBed' => $groupByBed,
                'groupByPrice' => $groupByPrice,
                'groupByPropertyFor' => $groupByPropertyFor,
                'groupByLocName' => $groupByLocName, 
                'amenities' => $amenities,
                'features' => $features,
            ]);


    }

    public function searchByCategoryFor($category, $for)
    {

        if($category == 'property'){
            $properties = Property::Where('property_for', '=', $for)
            ->whereBetween('price', array(5000000, 10000000))
            ->orderBy('is_latest', 'desc')->paginate(6);
            $category = "properties";
        } else {
            $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->whereBetween('price', array(5000000, 10000000))
            ->orderBy('price', 'desc')->paginate(6);
        }

        $allGeo = Property::all();
        $community_desc = "";
        $groupByPropertyType = Property::all()->groupBy('property_type');
        $groupByPropertyFor = Property::all()->groupBy('property_for');
        $groupByCategories = Property::all()->groupBy('category_name');

        $groupByBed= Property::all()->groupBy('beds')->sortDesc();
        $groupByBath = Property::all()->groupBy('baths');
        $groupBySize = Property::all()->groupBy('build_up_area');

        $groupByPrice = Property::all()->groupBy('price');

        $groupByLocName = Property::all()->groupBy('loc_name');
        $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
        
        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();

        return view('the-selection.index', [
                'properties' => $properties, 
                'cat' => $category, 
                'for' => $for,
                'community_desc' => $community_desc,
                'groupByCategories' => $groupByCategories, 
                'groupByLocName' => $groupByLocName, 
                'groupBySubLocName' => $groupBySubLocName,
                'groupByBed' => $groupByBed,
                'groupByPrice' => $groupByPrice,
                'groupByPropertyFor' => $groupByPropertyFor,
                'groupByLocName' => $groupByLocName,      
                'amenities' => $amenities,
                'features' => $features,
                'allGeo' => $allGeo,
            ]);
    }

    public function searchByLoc($category, $for, $loc)
    {
        // $properties = Property::simplePaginate(9);
        $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->whereBetween('price', array(5000000, 10000000))
            ->orderBy('price', 'desc')->paginate(6);

            $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($loc) ))->first();

            $groupByPropertyType = Property::all()->groupBy('property_type');
            $groupByPropertyFor = Property::all()->groupBy('property_for');
            $groupByCategories = Property::all()->groupBy('category_name');
    
            $groupByBed= Property::all()->groupBy('beds')->sortDesc();
            $groupByBath = Property::all()->groupBy('baths');
            $groupBySize = Property::all()->groupBy('build_up_area');
    
            $groupByPrice = Property::all()->groupBy('price');
    
            $groupByLocName = Property::all()->groupBy('loc_name');
            $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();
            $allGeo = Property::all();

        return view('the-selection.index', [
                'properties' => $properties, 
                'cat' => $category, 
                'for' => $for, 
                'loc_name' => $loc, 
                'community_desc' => $community_desc,
                'groupByCategories' => $groupByCategories, 
                'groupByLocName' => $groupByLocName, 
                'groupBySubLocName' => $groupBySubLocName,
                'groupByBed' => $groupByBed,
                'groupByPrice' => $groupByPrice,
                'groupByPropertyFor' => $groupByPropertyFor,
                'groupByLocName' => $groupByLocName,
                'amenities' => $amenities,
                'features' => $features,  
                'allGeo' => $allGeo,  
            ]);
    }

    public function searchBySubLoc($category, $for, $loc, $subloc)
    {
        // $properties = Property::simplePaginate(9);
        $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->Where('sub_loc_name', '=', $subloc)
            ->whereBetween('price', array(5000000, 10000000))
            ->orderBy('price', 'desc')->paginate(6);

            $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($loc) ))->first();

            $groupByPropertyType = Property::all()->groupBy('property_type');
            $groupByPropertyFor = Property::all()->groupBy('property_for');
            $groupByCategories = Property::all()->groupBy('category_name');
    
            $groupByBed= Property::all()->groupBy('beds')->sortDesc();
            $groupByBath = Property::all()->groupBy('baths');
            $groupBySize = Property::all()->groupBy('build_up_area');
    
            $groupByPrice = Property::all()->groupBy('price');
    
            $groupByLocName = Property::all()->groupBy('loc_name');
            $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();
            $allGeo = Property::all();

        return view('the-selection.index', [
                'properties' => $properties, 
                'cat' => $category, 
                'for' => $for, 
                'loc_name' => $loc, 
                'sub_loc_name' => $subloc, 
                'community_desc' => $community_desc,
                'groupByCategories' => $groupByCategories, 
                'groupByLocName' => $groupByLocName, 
                'groupBySubLocName' => $groupBySubLocName,
                'groupByBed' => $groupByBed,
                'groupByPrice' => $groupByPrice,
                'groupByPropertyFor' => $groupByPropertyFor,
                'groupByLocName' => $groupByLocName,
                'amenities' => $amenities,
                'features' => $features, 
                'allGeo' => $allGeo,    
            ]);
    }
    
    public function searchByRef($category, $for, $loc, $subloc, $ref)
    {
        // $properties = Property::simplePaginate(9);
        $property = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->Where('sub_loc_name', '=', $subloc)
            ->Where('reference', '=', $ref)->first();
        
            $member = Member::findByAgentRef($property['assigned_to_reference']);

            $simpPoperties = Property::similarProperties($category, $for, $loc, $subloc);
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();

        return view('the-selection.details', [
            'property' => $property, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => $loc, 
            'sub_loc_name' => $subloc, 
            'member' => $member,
            'simpPoperties' => $simpPoperties,
            'amenities' => $amenities,
            'features' => $features,   
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
