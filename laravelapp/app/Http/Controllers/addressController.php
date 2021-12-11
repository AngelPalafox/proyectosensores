<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\address;

class addressController extends Controller
{
    //
    public function getAddress()
    {
            return address::all();
    }
    public function insertAddress(Request $request)
    {
        // Validate the request...
        
         $address = new address;
         $address->Direccion = $request->Direccion;
         $address->save();
    }
    public function updateAddress(Request $request)
    {
        $address = address::find($request->id);


        $address->Direccion = $request->Direccion;
        
        $address->save();
    }
    public function deleteAddress(Request $request)
    {
        $address = address::find($request->id);

        $address->delete();
    }
    public function findAddress($id)
    {
       return address::find($id);

    }
}
