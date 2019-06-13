<?php

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
Route::get('/', 'RecipesController@index');
Route::get('/recipes', 'RecipesController@index');
Route::get('/recipes/create', 'RecipesController@create');
Route::get('/ingredients', 'IngredientsController@index');
Route::get('/ingredients/create', 'IngredientsController@create');
Route::get('/ingredients/store', 'IngredientsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
