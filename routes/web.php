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

Route::get('/', function () {
    return view('welcome');
});

Route::get('debounce', 'HomeController@debounce');
Route::get('tooltips', 'HomeController@tooltips');
Route::get('element', 'HomeController@element');

Route::get('form', 'HomeController@form');
Route::post('form', 'HomeController@store');

Route::get('data', 'HomeController@resource');
