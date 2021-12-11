<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
class alumnoController extends Controller
{
    //
    public function getalumno()
    {
            return alumnos::all();
    }
    public function insertalumno(Request $request)
    {
        // Validate the request...
        
         $alumnos = new alumnos;
         $alumnos-> Nombre = $request->Nombre;
         $alumnos-> aula_id = $request->aula_id;
         $alumnos->save();
    }
    public function updatealumno(Request $request)
    {
        $alumnos = alumnos::find($request->id);

        $alumnos-> Nombre = $request->Nombre;
        $alumnos-> aula_id = $request->aula_id;
        $alumnos->save();
    }
    public function deletealumno(Request $request)
    {
        $alumnos = alumnos::find($request->id);
        
        $alumnos->delete();
    }
}
