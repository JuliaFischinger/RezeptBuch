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
    return view('frontend.index');
})->name('home');

Auth::routes();

Route::get('/backend', 'BackendController@index')->name('backend.index');

Auth::routes();

Route::resources([
    'rezepte'=>'RezepteController'
]);


