<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resort;
use App\Models\Booking;

use PDF;


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

        $data = [
            'resortName' => $request->resortName,
            'name' => $request->name,
            'date' => $dateval,
            'price' => $request->price,
            'contact' => $request->contact
        ];
        $pdf = PDF::loadView('myPDF', $data);
        $resortName = $request->resortName;

        return $pdf->download($resortName.'.pdf');
    }

        public function destroy(Booking $booking){
            $booking->delete();
            return back();
        }


}
