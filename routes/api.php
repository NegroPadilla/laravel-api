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

Route::get('regiones','app\Http\Controllers\RegionController@getRegiones');
Route::get('regiones/{id}','app\Http\Controllers\RegionController@getRegion');

Route::get('provincias','app\Http\Controllers\ProvinciaControllerr@getProvincias');
Route::get('provincias/{id}','app\Http\Controllers\ProvinciaControllerr@getProvincia');
Route::get('provincias/region/{id}','app\Http\Controllers\ProvinciaControllerr@getProvinciasRegion');

Route::get('ciudades','app\Http\Controllers\CiudadControllerr@getCiudades');
Route::get('ciudades/{id}','app\Http\Controllers\CiudadControllerr@getCiudad');
Route::get('ciudades/provincia/{id}','app\Http\Controllers\CiudadControllerr@getCiudadesProvincias');

Route::get('calles','app\Http\Controllers\CalleControllerr@getCalles');
Route::get('calles/{id}','app\Http\Controllers\CalleControllerr@getCalle');
Route::get('calles/id/{id}','app\Http\Controllers\CalleControllerr@getCallesNom');
Route::get('calles/get/{id}','app\Http\Controllers\CalleControllerr@getCallesData');
Route::post('calles','app\Http\Controllers\CalleControllerr@addCalle');
Route::put('calles/{id}','app\Http\Controllers\CalleControllerr@gupdateCalle');
Route::delete('calles/{id}','app\Http\Controllers\CalleControllerr@deleteCalles');