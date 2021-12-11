<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hola', function (Request $request)
{
   return "Hola Mundo"; 
});

    use App\Http\Controllers\productController;

    Route::post('/getProducts',[productController::class,'getProducts']);
    Route::post('/insertProduct',[productController::class,'insertProduct']);
    Route::post('/updateProduct',[productController::class,'updateProduct']);

use App\Http\Controllers\userController;

Route::post('/getUsert',[userController::class,'getUsert']);
Route::post('/updateUsert/{id}',[userController::class,'updateUsert']);
Route::post('/insertUsert',[userController::class,'insertusert']);
Route::post('/deleteUsert/{id}',[userController::class,'deleteUsert']);
Route::post('/findUsert/{id}',[userController::class,'findUsert']);

use App\Http\Controllers\tripController;

Route::post('/updateTrip/{id}',[tripController::class,'updateTrip']);
Route::post('/getTrip',[tripController::class,'getTrip']);
Route::post('/insertTrip',[tripController::class,'insertTrip']);
Route::post('/deleteTrip/{id}',[tripController::class,'deleteTrip']);
Route::post('/findTrip/{id}',[tripController::class,'findTrip']);

use App\Http\Controllers\addressController;


Route::post('/updateAddress/{id}',[addressController::class,'updateAddress']);
Route::post('/getAddress',[addressController::class,'getAddress']);
Route::post('/insertAddress',[addressController::class,'insertAddress']);
Route::post('/deleteAddress/{id}',[addressController::class,'deleteAddress']);
Route::post('/findAddress/{id}',[addressController::class,'findAddress']);

//
use App\Http\Controllers\alumnoController;


Route::post('/updatealumno/{id}',[alumnoController::class,'updatealumno']);
Route::post('/getalumno',[alumnoController::class,'getalumno']);
Route::post('/insertalumno',[alumnoController::class,'insertalumno']);
Route::post('/deletealumno/{id}',[alumnoController::class,'deletealumno']);

use App\Http\Controllers\edificioController;


Route::post('/updateedificio/{id}',[edificioController::class,'updateedificio']);
Route::post('/getedificio',[edificioController::class,'getedificio']);
Route::post('/insertedificio',[edificioController::class,'insertedificio']);
Route::post('/deleteedificio/{id}',[edificioController::class,'deleteedificio']);

use App\Http\Controllers\aulaController;


Route::post('/updateaula/{id}',[aulaController::class,'updateaula']);
Route::post('/getaula',[aulaController::class,'getaula']);
Route::post('/insertaula',[aulaController::class,'insertaula']);
Route::post('/deleteaula/{id}',[aulaController::class,'deleteaula']);

use App\Http\Controllers\guzzle;

//Sensores
Route::get('/getpe',[guzzle::class,'getpe']);

/*use App\Http\Controllers\AuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});
*/
//JWT de los Usuarios
/*use App\Http\Controllers\Usuario;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [k::class, 'login']);
    Route::post('/register', [k::class, 'register']);
    Route::post('/logout', [k::class, 'logout']);
    Route::post('/refresh', [k::class, 'refresh']);
    Route::get('/user-profile', [k::class, 'userProfile']);    
});*/