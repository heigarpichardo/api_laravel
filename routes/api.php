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
Route::resource('Brands', 'BrandsController',[ 'only' => ['index','show','store']]);
Route::get('Brands/showbybrand/{brand?}', 'BrandsController@showbybrand');

//Models
Route::resource('Models', 'ModelsController',[ 'only' => ['index','show','store']]);
Route::get('Models/showbybrand/{id}', 'ModelsController@showbybrand');

//Devices
Route::resource('Devices', 'DevicesController',[ 'only' => ['index','show','store']]);

//Colors
Route::resource('Colors', 'ColorsController',[ 'only' => ['index','show','store']]);

//Vehicles
Route::resource('Vehicles', 'VehiclesController',[ 'only' => ['index','show','store']]);

//Tickets
Route::resource('Tickets', 'TicketsController',[ 'only' => ['index','show','store']]);

//Category
Route::resource('Category', 'CategoryController',[ 'only' => ['index','show','store']]);