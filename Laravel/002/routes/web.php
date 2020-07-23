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

Route::get('/smartphone', 'SmartphoneController@index');

Route::get('/smartphone/create', 'SmartphoneController@create');

Route::post('/smartphone/store', 'SmartphoneController@store');

Route::get('/smartphone2/create', 'Smartphone2@create');

Route::post('/smartphone2/store', 'Smartphone2@store');