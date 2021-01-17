<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;



class nycController extends Controller
{

    public function index()
    {
        //$nycs = Http::get('https://api.rexcrm.com/listings/feed/siteListing?api_key=AYAQALUIAMAPDAMH')->json();
        //$collection = collect( $nycs['record'] );

        return view('nyc.index', [
            'data' => '' //$collection
        ]);
    }

}
