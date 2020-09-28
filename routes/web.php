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

Route::get('/', function () {
    return view('welcome');
});

// View data rak
Route::get('rak', 'RakController@index');

// Create data rak
Route::get('input_rak', 'RakController@input');

// Input action data rak
Route::post('input_rak_action', 'RakController@input_action');

// Delete data rak
Route::get('delete_rak/{id}', 'RakController@delete');

// Update data rak
Route::get('edit_rak/{id}', 'RakController@edit');

// Update action data rak
Route::post('update_rak', 'RakController@update');
