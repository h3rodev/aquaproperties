<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('thank-you', []);
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

    public function store(Request $request) { 
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        
        $contact->mobile_number = $request->mobile_number;
        
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        
        $contact->source = $request->source;
        $contact->sub_source = $request->sub_source;
        $contact->medium = $request->medium;
        $contact->campaign = $request->campaign;
        $contact->reference_number = $request->reference_number;
        $contact->agent = $request->agent;

        $contact->save();
        
        // return view('thank-you', [
        //         'name'      =>  $contact->name,
        //         'subject'   =>  $contact->subject,
        //         'campaign'  =>  $contact->campaign
        //     ]
        // );

        return response()->json(['success'=>'Form is successfully submitted!']);
    }

    public function check(Request $request)
    {
        return response()->json($request);
        // return response()->json(['success'=>'Form is successfully submitted!']);
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
