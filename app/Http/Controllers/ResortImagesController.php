<?php

namespace App\Http\Controllers;

use App\Models\ResortImage;
use App\Models\Resort;
use Illuminate\Http\Request;

class ResortImagesController extends Controller
{
    public function index($id){
        $passId = $id;
        return view('pages.imageup', [
                'passId' => $passId
        ]);
    }

    public function store(ResortImage $resortImage,Request $request)
    {
 
        $request->validate([
          'images' => 'required',
        ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

                $resortImage->create([
                    'resort_id' => $request->passId,
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
            
                  }
                 
            }
            $currResort = Resort::where('id', $request->passId)->get();
            foreach($currResort as $curr){
                $passId = $curr->id;
            }
            

     return redirect()->route('location', $passId);
                 

       
    }
}

