<?php

namespace App\Http\Controllers;

use App\Models\ResortImage;
use App\Models\Resort;
use Illuminate\Http\Request;

class ResortImagesController extends Controller
{
    public function index(){

        return view('pages.imageup');
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
                    'user_id' => $request->user()->id,
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
            }
            return redirect('/setlocation');
         }
                 

       
    }
}

