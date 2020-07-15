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

Route::get("/shops", "ShopsController@index");
Route::get("/shops/new", "ShopsController@create");
Route::get("/shops/{id}", "ShopsController@show");
Route::post("/shops", "ShopsController@store");
Route::get("/shop/{id}/edit", "ShopsController@edit");
Route::patch("/shop/{id}", "ShopsController@update");
Route::delete("/shop/{id}", "ShopsController@destroy");