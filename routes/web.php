<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
Route::get('/{any?}', 'ClientController@getPaginationPage')->name('home');
Route::get('/clients/autos', 'ClientController@getPaginationData');
Route::post('/clients', 'ClientController@postClientWithAuto');
//Route::get('/autos/{id}', 'AutoController@getAutoWithClientData');
//Route::post('/autos', 'AutoController@postAuto');
//Route::put('/autos/{id}', 'AutoController@putAutoWithClient');
Route::delete('/autos/{id}', 'AutoController@Delete');
Route::get('/clients/phones/{phone}', 'ClientController@validatePhone');
Route::get('/autos/plate_numbers/{plateNumber}', 'AutoController@validatePlateNumber');
