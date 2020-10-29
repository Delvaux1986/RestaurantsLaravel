<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Controller;
use Auth;


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
// Auth::routes();

Route::get('/home', 'App\Http\Controllers\RestaurantController@index')->middleware('auth')->name('home');

Route::get('/' , 'App\Http\Controllers\RestaurantController@index')->middleware('auth');

// Route::get('/logout', 'Auth\LoginController@logout');

// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/restaurants/create', 'App\Http\Controllers\RestaurantController@create')->middleware('auth');

Route::post('/restaurant/create' ,'App\Http\Controllers\RestaurantController@store')->middleware('auth');

Route::get('/restaurants/show' , 'App\Http\Controllers\RestaurantController@show')->middleware('auth');

Route::get('/restaurants/{id}','App\Http\Controllers\RestaurantController@show')->middleware('auth');

Route::get('/restaurants/edit/{id}' , 'App\Http\Controllers\RestaurantController@edit')->middleware('auth');

Route::patch('/restaurants/edit/{id}','App\Http\Controllers\RestaurantController@update')->middleware('auth');





// Auth::routes();


