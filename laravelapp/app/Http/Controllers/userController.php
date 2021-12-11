<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usert;

class userController extends Controller
{
    //
    public function getUsert()
    {
       // return usert::all();
       return  $usert = usert::with('trip')->get();

         foreach ($usert as $usert) {
             echo $usert->trip->id;
             echo " ";
             echo $usert ->trip->name;
             echo" ";
             echo $usert ->trip->address_id;
             echo" ";
         }
    }
    public function insertUsert(Request $request)
    {
        // Validate the request...
        
         $usert = new usert;
         $usert->Nombre = $request->Nombre;
         $usert->Telefono = $request->Telefono;
         $usert->trip_id = $request->trip_id;
         $usert->save();
    }
    public function updateUsert(Request $request)
    {
        $usert= usert::find($request -> id);
        $usert->Nombre = $request->Nombre;
        $usert->Telefono = $request->Telefono;
        $usert->trip_id = $request->trip_id;
        $usert->save();
    }
    public function deleteUsert(Request $request)
    {
        $usert = usert::find($request -> id);
        $usert->delete();
    }

    public function findUsert($id)
    {
        return usert::find($id);
    }
}
