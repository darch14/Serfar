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
Route::get('/', function () {
    return view('welcomeController');
});
Route::get('serfarltda/', [
    'as' => 'routeHome', 'uses' => 'HomeLController@index'
]);
Route::get('serfarltda/Laboraty', [
    'as' => 'Laboraty', 'uses' => 'LaboratoryController@index'
]);
//Route::resource('serfar','welcomeController');
//Route::resource('serfarltda','HomeLController');
//Route::resource('Laboraty','LaboratoryController');
