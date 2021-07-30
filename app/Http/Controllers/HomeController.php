<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use App\Models\ResortImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $resorts = Resort::all();
        $images = ResortImage::all();
        return view('welcome', [
            'resorts' => $resorts,
            'images' => $images
        ]);
    }
}
