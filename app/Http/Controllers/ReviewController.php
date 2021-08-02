<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Request $request){
            $request->validate([
                'body' => 'required',
            ]);

            Review::create([
                'name' => auth()->user()->name,
                'resort_id' => $request->resortId,
                'body' => $request->body,
            ]);
            

            return back();
    }
}
