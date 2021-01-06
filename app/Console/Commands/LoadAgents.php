<?php

namespace App\Console\Commands;
use Illuminate\Support\Str;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Collection;
use App\Member;

class LoadAgents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:loadagents';

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
        Member::query()->truncate();

        $comminities = Http::get('https://api.rexcrm.com/users/feed/usersInJson?api_key=YHAHALMIMSABDJAD')->json();
        $collection = collect( $comminities['record'] );
        
        
        $count = 1;
        foreach ( $collection as $members ) {
            if( !Member::where('reference', '=', $members['reference'])->first() ){
                if(!Member::where('slug', '=', Str::slug($members['public_name'], '-'))->first()){


                if($members['status'] == 1){

                    Member::create([
                        'reference' => $members['reference'],
                        'public_name' => $members['public_name'],
                        'slug' => Str::slug($members['public_name'], '-'),
                        'private_name' => $members['full_name'],
                        'mobile' => $members['mobile'],
                        'email' => $members['email'],
                        'job_title' => $members['job_title'],
                        'department' => $members['department'],
                        'profile_picture' => $members['profile_picture_url'],
                        'description' => $members['bio'],
                        'broker_number' => $members['rera_brn'],
                        'locations' => $members['locations'],
                        'language' => '',
                        'status' => $members['status']
                    ]);
                    $this->info($count++ . " - " . $members['public_name']);
                } else {
                    $memberStatus = Member::where('reference', '=', $members['reference'])->first()
                    ->update([
                        'status' => 0
                    ]);
                    $this->info( $memberStatus );
                }
                
            }
            }
            
        }
        return 0;
    }
}
