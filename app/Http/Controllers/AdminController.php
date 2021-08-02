<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resort;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['checkStatus', 'auth']);
    }

    public function index(){
        $bookings = Booking::all();
        $resorts = Resort::all();
        $users = User::all();
        $resortNames = array();
        $newNames = array();
        $arrayCount = array();
        foreach($bookings as $booking){
            array_push($resortNames, $booking->resortName);
        }

        foreach($resortNames as $names){
            if(!in_array($names,$newNames)){
                array_push($newNames, $names);
            }
        }

        for($i=0;$i<count($newNames);$i++){
            $current = $resortNames[$i];
            $count = 1;
            for($j=$i+1;$j<count($newNames);$j++){
                if($resortNames[$j] == $current){
                    $count++;
                }
            }
            array_push($arrayCount,$count);
        }
 
        return view('admin.admin')->with('names',json_encode($newNames,JSON_NUMERIC_CHECK))->with('nums',json_encode($arrayCount,JSON_NUMERIC_CHECK))->with('resorts',$resorts)->with('users', $users)->with('bookings', $bookings);
    }



      
        
        
        
}
