<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\productController;

Route::post('/getProducts',[productController::class,'getProducts']);

use App\Http\Controllers\userController;

Route::post('/getUsert',[userController::class,'getUsert']);


use App\Http\Controllers\tripController;

Route::post('/getTrip',[tripController::class,'getTrip']);


use App\Http\Controllers\addressController;

Route::post('/getAddress',[addressController::class,'getAddress']);

use App\Http\Controllers\alumnoController;

Route::post('/getalumno',[alumnoController::class,'getalumno']);


use App\Http\Controllers\aulaController;

Route::post('/getaula',[aulaController::class,'getaula']);

use App\Http\Controllers\edificioController;

Route::post('/getedificio',[edificioController::class,'getedificio']);