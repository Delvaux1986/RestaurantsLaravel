<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restaurant;
use App\Http\Controllers\Controller;


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



Route::get('/' , 'RestaurantController@index');

Route::get('/restaurants/create', 'RestaurantController@create'); // RAPELLEZ A ARNAUD POUR LES ROUTES DANS LE BONNE ORDRE LE PRECISER DANS LE REPO

Route::post('/restaurant/create' ,'RestaurantController@store');

Route::get('/restaurants/show' , 'RestaurantController@show');

Route::get('/restaurants/{id}','RestaurantController@show');


