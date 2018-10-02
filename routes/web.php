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

Route::get('/', 'ScholarController@index');
Route::get('scholar','ScholarController@index');
Route::get('scholar/list','ScholarController@list');
Route::get('scholar/create','ScholarController@create');
Route::post('scholar/store','ScholarController@store');
Route::get('scholar/edit/{id}','ScholarController@edit');
Route::put('scholar/update/{id}','ScholarController@update')->name('update');
Route::get('scholar/show/{id}','ScholarController@show');
Route::get('scholar/delete/{id}','ScholarController@destroy');
