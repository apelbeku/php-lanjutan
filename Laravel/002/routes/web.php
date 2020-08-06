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

Route::get('/', 'HomeController@index');

Route::get('/smartphones', 'SmartphoneController@index');
Route::get('/smartphones/create', 'SmartphoneController@create');
Route::post('/smartphones/store', 'SmartphoneController@store');
Route::get('/smartphone2/create', 'Smartphone2@create');
Route::post('/smartphone2/store', 'Smartphone2@store');
Route::get('smartphones/edit/{id}', 'SmartphoneController@edit');
Route::put('/smartphones/update/{id}', 'SmartphoneController@update');
Route::delete('smartphones/delete/{id}', 'SmartphoneController@delete');

Route::get('/vendors', 'VendorController@index');
Route::get('/vendors/create', 'VendorController@create');
Route::post('/vendors/store', 'VendorController@store');
Route::get('vendors/edit/{id}', 'VendorController@edit');
Route::put('/vendors/update/{id}', 'VendorController@update');
Route::delete('vendors/delete/{id}', 'VendorController@delete');

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/registration-process', 'AuthController@registrationProcess');
Route::post('/login-process', 'AuthController@loginProcess');
Route::post('/logout', 'AuthController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
