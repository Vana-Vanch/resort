<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Resort;
use App\Models\ResortImage;

class ResortDetailController extends Controller
{
    public function show($id){
        $curr_resort = Resort::find($id);
        $curr_location = array();
        $curr_location = Location::where('resort_id', $curr_resort->id)->get();
     
        $curr_image = ResortImage::where('resort_id', $curr_resort->id)->get();



        return view('resorts.detail',[
            'resort' => $curr_resort,
            'locations' => $curr_location,
            'images' => $curr_image
        ]);
    }
}
