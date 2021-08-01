<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


class LocationController extends Controller
{
    public function index($id){
        $passId = $id;
        return view('pages.setlocation', [
            'passId' => $passId
        ]);
    }

    public function store(Location $location,Request $request){
        $request->validate([
            'lat' => 'required',
            'lng' => 'required',
        ]);
    
        $locations = array();
        array_push($locations, $request->lat, $request->lng);
        $location->create([
            'resort_id' => $request->passId,
            'location' => $locations
        ]);
        return redirect()->route('admin');

    }
}
