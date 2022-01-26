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

//Route::post('/client','App\Http\controllers\ClientController@store');
Route::resource('/clients','App\Http\controllers\ClientController');
//Route::put('/client/{client}','App\Http\controllers\ClientController@update');