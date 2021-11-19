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

Route::get('regiones','App\Http\Controllers\RegionController@getRegiones');
Route::get('regiones/{id}','App\Http\Controllers\RegionController@getRegion');

Route::get('provincias','App\Http\Controllers\ProvinciaController@getProvincias');
Route::get('provincias/{id}','App\Http\Controllers\ProvinciaController@getProvincia');
Route::get('provincias/region/{id}','App\Http\Controllers\ProvinciaController@getProvinciasRegion');

Route::get('ciudades','App\Http\Controllers\CiudadController@getCiudades');
Route::get('ciudades/{id}','App\Http\Controllers\CiudadController@getCiudad');
Route::get('ciudades/provincia/{id}','App\Http\Controllers\CiudadController@getCiudadesProvincias');

Route::get('calles','App\Http\Controllers\CalleController@getCalles');
Route::get('calles/{id}','App\Http\Controllers\CalleController@getCalle');
Route::get('calles/id/{id}','App\Http\Controllers\CalleController@getCallesNom');
Route::get('calles/get/{id}','App\Http\Controllers\CalleController@getCallesData');
Route::post('calles','App\Http\Controllers\CalleController@addCalle');
Route::put('calles/{id}','App\Http\Controllers\CalleController@updateCalle');
Route::delete('calles/{id}','App\Http\Controllers\CalleController@deleteCalle');