<?php

namespace App\Console\Commands;

use App\Communities;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class LoadCommunities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:loadcommunities';

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
        Communities::query()->truncate();
        $comminities = Http::get()->json();
        $collection = collect( $comminities['record'] );
        
        
        $count = 1;
        foreach ( $collection as $property ) {
            if( !Communities::where('community_id', '=', $property['location_id'])->first() ){

                Communities::create([
                    'community_id' => $property['location_id'],
                    'community_name' => $property['loc_name'],
                    'sub_community_name' => $property['sub_loc_name'],
                    'community_desc' => $property['community_description'],
                    'sub_community_desc' => '',
                    'property_developer' => $property['property_developer'],
                    'loc_geo' => $property['loc_latitude'] .',' .$property['loc_longitude'],
                    'sub_loc_geo' => $property['sub_loc_latitude'] .',' .$property['sub_loc_longitude'],
                ]);
                $this->info($count++ . " - " . $property['loc_name']);
            }
            
        }
        return 0;
    }
}
