<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = [
        'created_by_id',
        'portal_status',
        'reference',
        'beds',
        'baths',
        'title',
        'description',
        'community_description',
        'slug',
        'property_for',
        'property_type',
        'permit_no',
        'build_up_area',
        'plot_area',
        'view',
        'furnished',
        'parking',
        'price',
        'frequency',
        'cheques',
        'is_featured',
        'is_managed',
        'is_exclusive',
        'is_premium',
        'completion_status',
        'completion_date',
        'construction_status',
        'payment_plan',
        'created_at',
        'property_developer',
        'property_ownership',
        'occupancy',
        'project_status',
        'updated_at',
        'created_by_full_name',
        'created_by_email',
        'created_by_mobile',
        'assigned_to_reference',
        'assigned_to_job_title',
        'assigned_to_profile_picture_url',
        'category_name',
        'country_name',
        'city_name',
        'community_id',
        'loc_name',
        'loc_latitude',
        'loc_longitude',
        'sub_loc_name',
        'status_name',
        'images_path',
        'commercial_features',
        'residential_features',
        'commercial_amenities',
        'residential_amenities',
        'video_url',
        'brochure_url'
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first(); 
    }

    public static function featuredProperties($for, $count) 
    {
        return static::where('is_featured', '=', 1)
        ->where('property_for', '=', $for)
        ->where('property_type', '=', 'residential')
        ->orderBy('price', 'desc')->paginate($count);
    }
    
    public static function luxuryProperties($for, $catname ,$count) 
    {
        return static::where('is_luxury', '=', 1)
        ->where('property_for', '=', $for)
        ->where('property_type', '=', 'residential')
        ->where('category_name', '=', $catname)
        ->whereBetween('price', array(1000000, 2000000))
        ->orderBy('price', 'asc')->paginate($count);
    }

    public static function similarProperties($category, $for, $loc, $subloc)
    {
        return static::where('category_name','=', $category)
        ->Where('property_for', '=', $for)
        ->Where('loc_name', '=', $loc)
        ->Where('sub_loc_name', '=', $subloc)
        ->orderBy('price', 'desc')->paginate(9);
    }

    public static function selectionProperties() 
    {
        return static::where('property_type', '=', 'residential')
        ->whereBetween('price', array(5000000, 10000000))
        ->orderBy('price', 'asc')->paginate(6);
    }

    public static function selectionPropertiesByType($for, $cat) 
    {
        return static::where('property_type', '=', 'residential')
        ->where('property_for', '=', $for)
        ->where('category_name', '=', $cat)
        ->whereBetween('price', array(5000000, 10000000))
        ->orderBy('price', 'asc')->paginate(6);
    }

    public static function findPropertyByAgent($ref, $count) 
    {
        return static::where('assigned_to_reference',$ref)->paginate($count);
    }

    public function getAmenities()
    {
        return $this->hasMany('App\PropertyAmenities');
    }

    public function getFeatures()
    {
        return $this->hasMany('App\PropertyFeatures');
    }
}
