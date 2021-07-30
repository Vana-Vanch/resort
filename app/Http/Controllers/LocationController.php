<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


class LocationController extends Controller
{
    public function index(){
        return view('pages.setlocation');
    }

    public function store(Location $location,Request $request){
        $request->validate([
            'lat' => 'required',
            'lng' => 'required',
        ]);
    
        $locations = array();
        array_push($locations, $request->lat, $request->lng);
        $location->create([
            'user_id' => $request->user()->id,
            'location' => $locations
        ]);
        return redirect('/');

    }
}
