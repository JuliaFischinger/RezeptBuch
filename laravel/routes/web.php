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

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/show/{rezept}', 'FrontendController@show')->name('frontend.show');
Route::get('/check', 'FrontendController@check')->name('frontend.check');

Auth::routes();

Route::get('/backend', 'BackendController@index')->name('backend.index');

Auth::routes();

Route::resources([
    'rezepte'=>'RezepteController'
]);

Route::get('/delete/{rezepte}', 'RezepteController@delete')->name('rezepte.delete');

