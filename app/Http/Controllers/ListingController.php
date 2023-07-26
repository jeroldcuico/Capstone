<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show($slug)
    {   
        $job = Job::findOrFail($slug); 
        return view('listing.show', compact('job'));
    }
}
