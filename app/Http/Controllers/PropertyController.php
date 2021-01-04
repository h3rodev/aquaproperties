<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Property;
use App\Communities;
use App\Member;
use App\PropertyAmenities;
use App\PropertyFeatures;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::paginate(9);
        $allGeo = Property::all();

        // $groupByPropertyType = Property::all()->groupBy('property_type');
        // $groupByPropertyFor = Property::all()->groupBy('property_for');
        // $groupByCategories = Property::all()->groupBy('category_name');

        // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
        // $groupByBath = Property::all()->groupBy('baths');
        // $groupBySize = Property::all()->groupBy('build_up_area');

        // $groupByPrice = Property::all()->groupBy('price');

        // $groupByLocName = Property::all()->groupBy('loc_name');
        // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');

        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();

        return view('properties.index', [
            'properties' => $properties, 
            // 'groupByCategories' => $groupByCategories, 
            // 'groupByLocName' => $groupByLocName, 
            // 'groupBySubLocName' => $groupBySubLocName,
            // 'groupByBed' => $groupByBed,
            // 'groupByPrice' => $groupByPrice,
            // 'groupByPropertyFor' => $groupByPropertyFor,
            // 'groupByLocName' => $groupByLocName, 
            'amenities' => $amenities,
            'features' => $features,
            'allGeo' => $allGeo,
            ]
        );
    }

    public function searchByCategoryFor($category, $for)
    {
        // $properties = Property::simplePaginate(9);

        if($category == 'property'){
            $properties = Property::Where('property_for', '=', $for)
            ->orderBy('is_latest', 'desc')->paginate(9);
            $category = "properties";
            
            
        } else {
            $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->orderBy('is_latest', 'desc')->paginate(9);
        }
        $allGeo = Property::all();
        $community_desc = "";
        // $groupByPropertyType = Property::all()->groupBy('property_type');
        // $groupByPropertyFor = Property::all()->groupBy('property_for');
        // $groupByCategories = Property::all()->groupBy('category_name');

        // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
        // $groupByBath = Property::all()->groupBy('baths');
        // $groupBySize = Property::all()->groupBy('build_up_area');

        // $groupByPrice = Property::all()->groupBy('price');

        // $groupByLocName = Property::all()->groupBy('loc_name');
        // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
        
        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();

        return view('properties.index', [
            'properties' => $properties, 
            'cat' => $category, 
            'for' => $for,
            'community_desc' => $community_desc,
            // 'groupByCategories' => $groupByCategories, 
            // 'groupByLocName' => $groupByLocName, 
            // 'groupBySubLocName' => $groupBySubLocName,
            // 'groupByBed' => $groupByBed,
            // 'groupByPrice' => $groupByPrice,
            // 'groupByPropertyFor' => $groupByPropertyFor,
            // 'groupByLocName' => $groupByLocName,      
            'amenities' => $amenities,
            'features' => $features,
            'allGeo' => $allGeo,
            ]  
        );
    }

    public function searchByLoc($category, $for, $loc)
    {
        // $properties = Property::simplePaginate(9);
        $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->orderBy('is_latest', 'desc')->paginate(9);

            $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($loc) ))->first();
            // $groupByPropertyType = Property::all()->groupBy('property_type');
            // $groupByPropertyFor = Property::all()->groupBy('property_for');
            // $groupByCategories = Property::all()->groupBy('category_name');
    
            // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
            // $groupByBath = Property::all()->groupBy('baths');
            // $groupBySize = Property::all()->groupBy('build_up_area');
    
            // $groupByPrice = Property::all()->groupBy('price');
    
            // $groupByLocName = Property::all()->groupBy('loc_name');
            // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();
            $allGeo = Property::all();

        return view('properties.index', [
            'properties' => $properties, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => $loc, 
            'community_desc' => $community_desc,
            // 'groupByCategories' => $groupByCategories, 
            // 'groupByLocName' => $groupByLocName, 
            // 'groupBySubLocName' => $groupBySubLocName,
            // 'groupByBed' => $groupByBed,
            // 'groupByPrice' => $groupByPrice,
            // 'groupByPropertyFor' => $groupByPropertyFor,
            // 'groupByLocName' => $groupByLocName,
            'amenities' => $amenities,
            'features' => $features,  
            'allGeo' => $allGeo,        
            ]  );
    }

    public function searchBySubLoc($category, $for, $loc, $subloc)
    {
        // $properties = Property::simplePaginate(9);
        $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->Where('sub_loc_name', '=', $subloc)
            ->orderBy('is_latest', 'desc')->paginate(9);

            $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($loc) ))->first();

            // $groupByPropertyType = Property::all()->groupBy('property_type');
            // $groupByPropertyFor = Property::all()->groupBy('property_for');
            // $groupByCategories = Property::all()->groupBy('category_name');
    
            // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
            // $groupByBath = Property::all()->groupBy('baths');
            // $groupBySize = Property::all()->groupBy('build_up_area');
    
            // $groupByPrice = Property::all()->groupBy('price');
    
            // $groupByLocName = Property::all()->groupBy('loc_name');
            // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();
            $allGeo = Property::all();

        return view('properties.index', [
            'properties' => $properties, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => $loc, 
            'sub_loc_name' => $subloc, 
            'community_desc' => $community_desc,
            // 'groupByCategories' => $groupByCategories, 
            // 'groupByLocName' => $groupByLocName, 
            // 'groupBySubLocName' => $groupBySubLocName,
            // 'groupByBed' => $groupByBed,
            // 'groupByPrice' => $groupByPrice,
            // 'groupByPropertyFor' => $groupByPropertyFor,
            // 'groupByLocName' => $groupByLocName,
            'amenities' => $amenities,
            'features' => $features, 
            'allGeo' => $allGeo,         
            ]  );
    }
    
    public function searchBySubLocOnly($category, $for, $subloc)
    {
        // $properties = Property::simplePaginate(9);
        $properties = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('sub_loc_name', '=', $subloc)
            ->orderBy('is_latest', 'desc')->paginate(9);

            $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($subloc) ))->first();

            // $groupByPropertyType = Property::all()->groupBy('property_type');
            // $groupByPropertyFor = Property::all()->groupBy('property_for');
            // $groupByCategories = Property::all()->groupBy('category_name');
    
            // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
            // $groupByBath = Property::all()->groupBy('baths');
            // $groupBySize = Property::all()->groupBy('build_up_area');
    
            // $groupByPrice = Property::all()->groupBy('price');
    
            // $groupByLocName = Property::all()->groupBy('loc_name');
            // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();
            $allGeo = Property::all();

        return view('properties.index', [
            'properties' => $properties, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => '', 
            'sub_loc_name' => $subloc, 
            'community_desc' => $community_desc,
            // 'groupByCategories' => $groupByCategories, 
            // 'groupByLocName' => $groupByLocName, 
            // 'groupBySubLocName' => $groupBySubLocName,
            // 'groupByBed' => $groupByBed,
            // 'groupByPrice' => $groupByPrice,
            // 'groupByPropertyFor' => $groupByPropertyFor,
            // 'groupByLocName' => $groupByLocName,
            'amenities' => $amenities,
            'features' => $features, 
            'allGeo' => $allGeo,         
            ]  );
    }

    public function searchByRef($category, $for, $loc, $subloc, $ref)
    {
        // $properties = Property::simplePaginate(9);
        $property = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', $loc)
            ->Where('sub_loc_name', '=', $subloc)
            ->Where('reference', '=', $ref)
            ->orderBy('is_latest', 'desc')->first();
        
            $member = Member::findByAgentRef($property['assigned_to_reference']);

            $simpPoperties = Property::similarProperties($category, $for, $loc, $subloc);
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();

        return view('properties.details', [
            'property' => $property, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => $loc, 
            'sub_loc_name' => $subloc, 
            'member' => $member,
            'simpPoperties' => $simpPoperties,
            'amenities' => $amenities,
            'features' => $features,          
            ]  );
    }
    

    public function searchByRefOnly($category, $for, $subloc, $ref)
    {
        // $properties = Property::simplePaginate(9);
        $property = Property::where('category_name','=', $category)
            ->Where('property_for', '=', $for)
            ->Where('loc_name', '=', '')
            ->Where('sub_loc_name', '=', $subloc)
            ->Where('reference', '=', $ref)
            ->orderBy('is_latest', 'desc')->first();
        
            $member = Member::findByAgentRef($property['assigned_to_reference']);

            $simpPoperties = Property::similarProperties($category, $for, '', $subloc);
            $amenities = PropertyAmenities::all();
            $features = PropertyFeatures::all();

        return view('properties.details', [
            'property' => $property, 
            'cat' => $category, 
            'for' => $for, 
            'loc_name' => '', 
            'sub_loc_name' => $subloc, 
            'member' => $member,
            'simpPoperties' => $simpPoperties,
            'amenities' => $amenities,
            'features' => $features,          
            ]  );
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



    public function advanceSearch(Request $request)
    {
        $keywords = $request->s ? $request->s : '%';
        $category = $request->c ? $request->c : '%';
        $for = $request->f ? $request->f : '%';
        $loc = $request->l ? $request->l : '%';
        $subloc = $request->sl ? $request->sl : '%';
        $p = $request->r ? $request->r : '%';
        $ref = $request->r ? $request->r : '%';

        $properties = Property::where('title','like', $keywords)
        ->Where('category_name', 'like', $category)
        ->Where('property_for', 'like', $for)
        ->Where('loc_name', 'like', strtolower( str_replace(' ','-', $loc) ) )
        ->Where('sub_loc_name', 'like', strtolower( str_replace(' ','-', $subloc) ) )

        ->orderBy('is_latest', 'desc')->paginate(9);

        $community_desc = Communities::Where('community_name', '=', str_replace('-', ' ', ucwords($loc) ))->first();

        // $groupByPropertyType = Property::all()->groupBy('property_type');
        // $groupByPropertyFor = Property::all()->groupBy('property_for');
        // $groupByCategories = Property::all()->groupBy('category_name');

        // $groupByBed= Property::all()->groupBy('beds')->sortDesc();
        // $groupByBath = Property::all()->groupBy('baths');
        // $groupBySize = Property::all()->groupBy('build_up_area');

        // $groupByPrice = Property::all()->groupBy('price');

        // $groupByLocName = Property::all()->groupBy('loc_name');
        // $groupBySubLocName = Property::all()->groupBy('sub_loc_name');
        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();
        $allGeo = Property::all();


    return view('properties.index', [
        'properties' => $properties, 
        'cat' => $category, 
        'for' => $for, 
        'loc_name' => $loc, 
        'sub_loc_name' => $subloc, 
        'community_desc' => $community_desc,
        // 'groupByCategories' => $groupByCategories, 
        // 'groupByLocName' => $groupByLocName, 
        // 'groupBySubLocName' => $groupBySubLocName,
        // 'groupByBed' => $groupByBed,
        // 'groupByPrice' => $groupByPrice,
        // 'groupByPropertyFor' => $groupByPropertyFor,
        // 'groupByLocName' => $groupByLocName,
        'amenities' => $amenities,
        'features' => $features, 
        'allGeo' => $allGeo,         
        ]  
    ); 

    }


    

    public function locationApi()
    {
        $groupByLocName = Property::all()->pluck('loc_name');

        $_loc =  array();
        foreach($groupByLocName as $loc) {
            
            if(ucwords(str_replace("-"," ",$loc)) != ''){
                if( !in_array(ucwords(str_replace("-"," ",$loc)), $_loc, TRUE) ){
                    $_loc[] = ucwords(str_replace("-"," ",$loc));
                }
            }

        }

        return $_loc;
    }

}
