<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\trip;

class tripController extends Controller
{
    //
    public function getTrip()
    {
            return trip::all();
    }
    public function insertTrip(Request $request)
    {
        // Validate the request...
        
         $trip = new trip;
         $trip->name= $request->name;
         $trip->address_id = $request->address_id;
         $trip->save();
    }
    public function updateTrip(Request $request)
    {
        $trip= trip::find($request-> id);
        $trip->name = $request->name;
        $trip->address_id = $request->address_id;
        $trip->save();
    }
    public function deleteTrip(Request $request)
    {
        $trip = trip::find($request -> id);


        $trip->delete();
    }
    public function findTrip($id)
    {
        return trip::find($id);
    }
}
