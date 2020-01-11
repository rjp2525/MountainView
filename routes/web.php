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

Route::get('/', ['as' => 'static.homepage', 'uses' => 'HomepageController@index']);
Route::get('about', ['as' => 'static.about', 'uses' => 'HomepageController@about']);
Route::get('services', ['as' => 'static.services', 'uses' => 'HomepageController@services']);
Route::get('privacy', ['as' => 'static.privacy', 'uses' => 'HomepageController@privacy']);
Route::post('contact', ['as' => 'static.contact.submit', 'uses' => 'HomepageController@contact']);

Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth', 'verified', 'beta.cookie'], 'prefix' => 'portal', 'namespace' => 'Client'], function() {
    Route::get('/', ['as' => 'portal.index', 'uses' => 'IndexController@index']);
});
