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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/dev', ['as' => 'static.homepage', 'uses' => 'HomepageController@index']);
Route::post('contact', ['as' => 'static.contact.submit', 'uses' => 'HomepageController@contact']);
