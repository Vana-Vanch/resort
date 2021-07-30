<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResortController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('pages.addresort');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'contact' => 'required|max:10',
            'price' => 'required',
            'description' => 'required',
       
          
        ]);

        $newImgName = time().'-'.$request->title.'.'.$request->file->extension();
        $request->file->move(public_path('/images/resorts'), $newImgName);
        
        auth()->user()->resort()->create([
            'title' => $request->title,
            'contact' => $request->contact,
            'price' => $request->price,
            'description' => $request->description,
            'display' => $newImgName
        ]);
       
        return redirect()->route('images');


            

        
    }
}
