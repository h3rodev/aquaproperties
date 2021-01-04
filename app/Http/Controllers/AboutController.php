<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class AboutController extends Controller
{
    public function index()
    {
        $services = Services::paginate(6);
        return view('about-us.index', ['services' => $services] );
    }
}
