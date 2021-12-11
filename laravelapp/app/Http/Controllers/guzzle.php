<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\sensores;

class guzzle extends Controller
{
    public function getpe(Request $request)
    {
   
     $response = Http::get('https://io.adafruit.com/api/v2/FabianOrtiz/feeds?x-aio-key=aio_FCnO89gMzY8lekXcTFF5xuOiCKi0');

     $posts = json_decode($response);
    
     foreach($posts as $post)
    
      {
         $postu[] = array();
         $postu[] = $post->name;
         $postu[] = $post->last_value;
         $postu[] = $post->id;

       
     $sensores = new sensores;
        $sensores-> nombre = $post -> name;
        $sensores-> valores = $post -> last_value;
        $sensores-> id = $post -> id;
        $sensores->save();
      
      } 

      return $postu;
    
        
      
    } 
}
