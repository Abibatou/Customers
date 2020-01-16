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
Route::get('create', 'Habitant@create');
    
Route::get('index', 'Habitant@index');
Route::post('customers', 'Habitant@store');
Route::get('edit/{id}', 'Habitant@edit')->name('customers.edit');
Route::get('customers', 'Habitant@update');
Route::delete('delete/{id}', 'Habitant@destroy')->name('customers.delete');
Route::put('update/{id}', 'Habitant@update')->name('customers.update');
