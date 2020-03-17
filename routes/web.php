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

Route::get('minacarton', 'MinacartonController@create')->name('minacarton.create');

Route::post('minacarton', 'MinacartonController@store')->name('minacarton.store');

Route::get('minacarton/list', 'MinacartonController@index')->name('minacarton.index');
