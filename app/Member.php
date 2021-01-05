<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

// use App\Property;

class Member extends \TCG\Voyager\Models\Member
{
    protected $fillable = [
        'reference', 'public_name', 'private_name', 'slug', 'mobile', 'email', 'job_title', 'department', 'profile_picture', 'description', 'broker_number',
    ];

    public static function findBySlug($slug) 
    {
        return static::where('slug',$slug)->first();  
    }

    public static function findByAgentRef($agentref) 
    {
        return static::where('reference',$agentref)->first();  
    }
    

    public static function loadTeamByDepartments($team) 
    {
        return static::where('department', 'like', '%'.$team.'%')->get();
    }


}