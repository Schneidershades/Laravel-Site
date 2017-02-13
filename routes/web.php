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

Route::get('/', function () { return view('welcome'); });

Route::get('stock', 'StockItemController@index');
Route::get('stock/{item}', 'StockItemController@detail');

Route::get('users', 'UsersController@index');
Route::get('users/{users}', 'UsersController@detail');

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@detail');
