<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use App\Property;
use App\PropertyFeatures;
use App\PropertyAmenities;
use App\Member;

use Carbon\Carbon;

class LoadProperties extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:loadproperties';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $properties = Http::get('https://api.rexcrm.com/listings/feed/siteListing?api_key=AYAQALUIAMAPDAMH')->json();
        $collection = collect( $properties['record'] );
    
        $count = 1;
        foreach ( $collection as $property ) {
            Property::create([
                'created_by_id' => $property['created_by_id'],
                'portal_status' => $property['portal_status'],
                'reference' => $property['reference'],
                'beds' => $property['beds'],
                'baths' => $property['baths'],
                'title' => $property['title'],
                'description' => $property['description'],
                'community_description' => $property['community_description'],
                'slug' => $property['slug'],
                'property_for' => $property['property_for'] == 'Rental' ? 'rent' : 'sale',
                'property_type' => $property['property_type'] == 'Residential' ? 'residential' : 'commercial',
                'permit_no' => $property['permit_no'],
                'build_up_area' => $property['build_up_area'],
                'plot_area' => $property['plot_area'],
                'view' => $property['view'],
                'furnished' => $property['furnished'],
                'parking' => $property['parking'],
                'price' => $property['price'],
                'frequency' => $property['frequency'],
                'cheques' => $property['cheques'],
                'is_featured' => $property['is_featured'],
                'is_luxury' => $property['is_luxury'],
                'is_latest' => 0,
                'is_managed' => $property['is_managed'],
                'is_exclusive' => $property['is_exclusive'],
                'is_premium' => $property['is_premium'],
                'completion_status' => $property['completion_status'],
                'completion_date' => $property['completion_date'],
                'construction_status' => $property['construction_status'],
                'payment_plan' => $property['payment_plan'],
                'created_at' => $property['created_at'],
                'property_developer' => $property['property_developer'],
                'property_ownership' => $property['property_ownership'],
                'occupancy' => $property['occupancy'],
                'project_status' => $property['project_status'],
                'updated_at' => $property['updated_at'],
                'created_by_full_name' => $property['created_by_full_name'],
                'created_by_email' => $property['created_by_email'],
                'created_by_mobile' => $property['created_by_mobile'],
                'assigned_to_reference' => $property['assigned_to_reference'],
                'assigned_to_job_title' => $property['assigned_to_job_title'],
                'assigned_to_profile_picture_url' => $property['assigned_to_profile_picture_url'],
                'category_name' => str_replace('/', '_', str_replace(' ', '_', strtolower($property['category_name']) ) ).'s',
                'country_name' => str_replace(' ', '-', strtolower($property['country_name']) ),
                'city_name' => str_replace(' ', '-', strtolower( $property['city_name'] ) ),
                'community_id' => $property['location_id'],
                'loc_name' => utf8_encode( str_replace(' ', '-', strtolower( $property['loc_name'] ) ) ),
                'loc_latitude' => $property['sub_loc_latitude'] ? $property['sub_loc_latitude'] : $property['loc_latitude'],
                'loc_longitude' => $property['loc_longitude'] ? $property['loc_longitude'] : $property['sub_loc_longitude'],
                'sub_loc_name' => utf8_encode( str_replace(' ', '-', strtolower( $property['sub_loc_name'] ) ) ),
                'status_name' => $property['status_name'],
                'images_path' => str_replace( 'storage/', 'https://s3.amazonaws.com/rexcrm/storage/', $property['images_path'] ),
                'commercial_features' => $property['commercial_features'],
                'residential_features' => $property['residential_features'],
                'commercial_amenities' => $property['commercial_amenities'],
                'residential_amenities' => $property['residential_amenities'],
                'video_url' => $property['video_url'],
                'brochure_url' => $property['brochure_url']
            ]);

            $this->info($count++ . " - " . $property['title']);
            $this->updatePropertyFeatures( $property['reference'] );
            $this->updatePropertyAmenities( $property['reference'] );
            
            // $agetReference = Member::where('reference', $property['assigned_to_reference'] )->first();

            // if( !$agetReference ) {

            //     Member::create([
            //         'reference' => $property['assigned_to_reference'], 
            //         'public_name' => $property['assigned_to_full_name'], 
            //         'private_name' => '',
            //         'slug' => $property['assigned_to_reference'], 
            //         'mobile' => $property['assigned_to_mobile'], 
            //         'email' => $property['created_by_email'], 
            //         'job_title' => $property['assigned_to_job_title'], 
            //         'department' => $property['assigned_to_reference'], 
            //         'profile_picture' => $property['assigned_to_profile_picture'],  
            //         'description' => '', 
            //         'broker_number' => '', 
            //     ]);
                
            // }
        }

        $this->updatePropertyIfLatest();
    

        return 0;
    }

    public function updatePropertyFeatures($ref) {
        $itemReference = Property::where('reference', $ref)->first();

        $comfeatures = explode('|', $itemReference['commercial_features'] );
        $privatefeatures = explode('|', $itemReference['residential_features'] );

        foreach ( $comfeatures as $comfeature ) {
            PropertyFeatures::create([
                'reference' => $ref,
                'com_private' => 'commercial',
                'title' => $comfeature,
                'slug' => str_replace(' ', '-', strtolower( $comfeature )),
             ]);
        }

        foreach ( $privatefeatures as $privatefeature ) {
            PropertyFeatures::create([
                'reference' => $ref,
                'com_private' => 'private',
                'title' => $privatefeature,
                'slug' => str_replace(' ', '-', strtolower( $privatefeature )),
             ]);
        }

        $this->info( $ref . 'Updated' );
    }

    public function updatePropertyAmenities($ref) {
        $itemReference = Property::where('reference', $ref)->first();

        $comfeatures = explode('|', $itemReference['commercial_amenities'] );
        $privatefeatures = explode('|', $itemReference['residential_amenities'] );

        foreach ( $comfeatures as $comfeature ) {
            PropertyAmenities::create([
                'reference' => $ref,
                'com_private' => 'commercial',
                'title' => $comfeature,
                'slug' => str_replace(' ', '-', strtolower( $comfeature )),
             ]);
        }

        foreach ( $privatefeatures as $privatefeature ) {
            PropertyAmenities::create([
                'reference' => $ref,
                'com_private' => 'private',
                'title' => $privatefeature,
                'slug' => str_replace(' ', '-', strtolower( $privatefeature )),
             ]);
        }

        $this->info( $ref . 'Updated' );
    }

    public function updatePropertyIfLatest() {
        $latestProperty = Property::whereDate('created_at', Carbon::now()->subDays(7))
        ->update([
            'is_latest' => 1
         ]);
        
        $this->info( $latestProperty );
    }
    
}
