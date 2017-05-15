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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/get/cafelist', 'CafeController@getcafelist');
Route::get('/adm', 'CafeController@index');
Route::get('/adm/create', 'CafeController@create');
Route::post('/adm/create/store', 'CafeController@store');
Route::get('/adm/delete/{id}', 'CafeController@delete', function ($id) {});
Route::get('/adm/login', 'CafeController@loginIndex');