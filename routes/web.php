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

Route::get('/',function()
{
    return view('welcome');
});


Route::get('kebab', 'KebabController@index')->name('kebab.index');
Route::get('kebab/create', 'KebabController@create')->name('kebab.create');
Route::post('kebab', 'KebabController@store');
Route::get('kebab/{id}','KebabController@show')->name('kebab.show');
Route::delete('kebab/{id}', 'KebabController@destroy')->name('kebab.destroy')->middleware('auth');
//
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index');
Route::get('pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/{id}','PizzaController@show')->name('pizzas.show');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
