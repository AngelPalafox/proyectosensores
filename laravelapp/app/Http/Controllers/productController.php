<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    //
    public function getProducts()
    {
        //return product::all();

        //return product::find(2); //busqueda por id
        
        //return product::where('stock','>',1) -> get(); //buscar columna especifica

        //return product::where('Precio', '<=', 14.00) -> where('Descripcion','=','Fuego') -> get(); //mas condiciones

        //return product::select('products.Id','products.Name') -> get();

        //return product::select('products.Id','categories.Tipo') -> join('categories','categories.id', '=', 'products.categories') -> get();

        //return product::select('products.id','categories.id') -> join('categories','categories.id', '=', 'products.categories_id') -> get();

        //return product::select('products.Name', 'products.precio')->get();        
    }

    public function insertProduct(Request $request)
    {
        // Validate the request...
        
         $product = new product;
         $product->Name = $request->Name;
         $product->Precio = $request->Precio;
         $product->Stock = $request->Stock;
         $product->Descripcion = $request->Descripcion;
         $product->categories_id = $request->categories_id;
         $product->vendor_id = $request->vendor_id;

         $product->save();
    }
    
    public function updateProduct(Request $request)
    {
        $product= Flight::find(1);

        $product->Name = $request->Name;
        $product->Precio = $request->Precio;
        $product->Stock = $request->Stock;
        $product->Descripcion = $request->Descripcion;
        $product->categories_id = $request->categories_id;
        $product->vendor_id = $request->vendor_id;
        $product->save();
    }

}
