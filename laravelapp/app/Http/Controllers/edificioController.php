<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\edificio;

class edificioController extends Controller
{
    //
    public function getedificio()
    {
            return edificio::all();
    }
    public function insertedificio(Request $request)
    {
        // Validate the request...
        
         $edificio = new edificio;
         $edificio-> Nombre = $request->Nombre;
         $edificio->save();
    }
    public function updateedificio(Request $request)
    {
        $edificio = edificio::find($request->id);
        $edificio-> Nombre = $request->Nombre;
        $edificio->save();
    }
    public function deleteedificio(Request $request)
    {
        $edificio= edificio::find($request->id);
        
        $edificio->delete();
    }
}
