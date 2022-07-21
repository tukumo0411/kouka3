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

//効果測定3
Route::get('kouka3', 'Kouka3Controller@index')->middleware('auth');
Route::post('kouka3/find', 'Kouka3Controller@find')->middleware('auth');;
Route::get('kouka3/show', 'Kouka3Controller@show')->middleware('auth');;
Route::get('kouka3/add', 'Kouka3Controller@add')->middleware('auth');;
Route::post('kouka3/create', 'Kouka3Controller@create')->middleware('auth');;
Route::get('kouka3/edit', 'Kouka3Controller@edit')->middleware('auth');;
Route::post('kouka3/update', 'Kouka3Controller@update')->middleware('auth');;
Route::get('kouka3/del', 'Kouka3Controller@del')->middleware('auth');;
Route::post('kouka3/remove', 'Kouka3Controller@remove')->middleware('auth');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
