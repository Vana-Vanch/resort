<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ApiResortController extends Controller
{
    public function index(){
        $resorts = Resort::all();
        return response($resorts,200);
    }

    public function show($id){
        $resort = Resort::find($id);
        return response($resort);
    }
}
