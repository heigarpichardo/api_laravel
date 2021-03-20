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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Brands
Route::resource('Brands', 'BrandsController',[ 'only' => ['index','show']]);

//Models
Route::resource('Models', 'ModelsController',[ 'only' => ['index','show']]);
Route::get('Models/showbybrand/{id}', 'ModelsController@showbybrand');
Route::get('Brands/showbybrand/{brand?}', 'BrandsController@showbybrand');

//Devices
Route::resource('Devices', 'DevicesController');
//Colors
Route::resource('Colors', 'ColorsController');
//Vehicles
Route::resource('Vehicles', 'VehiclesController');