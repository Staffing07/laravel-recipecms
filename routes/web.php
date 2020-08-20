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

//Route::get('/', function () {
//    return view('welcome');
//});

// recipes

Route::get('/', 'RecipeController@home');

Route::get('/recipes', 'RecipeController@index');

Route::get('/recipes/create', 'RecipeController@create');

Route::post('/recipes', 'RecipeController@store');

Route::get('/recipes/{id}', 'RecipeController@show')->name('recipes.show');

// measurements

Route::get('/measurements', 'MeasurementController@index');

Route::get('/measurements/create', 'MeasurementController@create');

Route::post('/measurements', 'MeasurementController@store');

// Route::post('/recipes', 'RecipeController@storemeasurement');







