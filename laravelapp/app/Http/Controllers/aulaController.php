<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\aula;

class aulaController extends Controller
{
    //
    public function getaula()
    {
            return aula::all();
    }
    public function insertaula(Request $request)
    {
        // Validate the request...
        
         $aula = new aula;
         $aula-> Nombre = $request->Nombre;
         $aula-> edificio_id = $request->edificio_id;
         $aula->save();
    }
    public function updateaula(Request $request)
    {
        $aula = aula::find($request->id);

        $aula-> Nombre = $request->Nombre;
        $aula-> edificio_id = $request->edificio_id;
        $aula->save();
    }
    public function deleteaula(Request $request)
    {
        $aula = aula::find($request->id);
        

        $aula->delete();
    }
}
