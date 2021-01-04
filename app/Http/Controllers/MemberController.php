<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Property;
use App\PropertyAmenities;
use App\PropertyFeatures;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $dep = $request->department; 
        $directors = Member::loadTeamByDepartments('Director');
        $salesAgents = Member::loadTeamByDepartments('sales');
        $leasingAgents = Member::loadTeamByDepartments('leasing');

        $members = Member::loadTeamByDepartments($dep);
        
        return view('members.index', ['members' => $members]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $member = Member::findBySlug($slug);
        
        $agentProperties = Property::findPropertyByAgent($member->reference, 6);
        $amenities = PropertyAmenities::all();
        $features = PropertyFeatures::all();
        
        return view('members.details', [
            'member' => $member, 
            'agentProperties' => $agentProperties,
            'amenities' => $amenities,
            'features' => $features
        ]);
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
