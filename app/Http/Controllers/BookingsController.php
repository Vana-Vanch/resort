<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resort;
use App\Models\Booking;


class BookingsController extends Controller
{
    public function index(Resort $resort){
        $bookings = Booking::where('resortName', $resort->title)->get();
        return view('resorts.book', [
            'resort' => $resort,
            'bookings' => $bookings,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'contact' => 'required|max:10',
            'date' => 'required|date',
        ]);
        $dateval = strval($request->date);
        
        Booking::create([
            'resortName' => $request->resortName,
            'name' => $request->name,
            'date' => $dateval,
            'price' => $request->price,
            'contact' => $request->contact
        ]);

        return redirect('/');
        


    }
}
