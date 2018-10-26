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
Route::get('/', [
    'as' => 'routeHome', 'uses' => 'HomeLController@index'
    //'as' => 'Swelcome', 'uses' => 'welcomeController@index'
    //return view('Swelcome');
]);
/*Route::get('serfarltda/', [
    'as' => 'routeHome', 'uses' => 'HomeLController@index'
]);*/
Route::get('serfarltda/Laboraty', [
    'as' => 'Laboraty', 'uses' => 'LaboratoryController@index'
]);
Route::get('serfarltda/HumanL', [
    'as' => 'HumanL', 'uses' => 'HumanController@index'
]);
Route::get('serfarltda/About', [
    'as' => 'Aboutus', 'uses' => 'AboutusController@index'
]);
Route::get('serfarltda/ContactL', [
    'as' => 'ContactL', 'uses' => 'ContactLController@index'
]);
Route::get('serfarltda/Medicament', [
    'as' => 'Medicament', 'uses' => 'MedicamentController@index'
]);
Route::get('serfarltda/error', function(){
  return view('fragment.error');
});
//Route::resource('serfar','welcomeController');
//Route::resource('serfarltda','HomeLController');
//Route::resource('Laboraty','LaboratoryController');
Route::resource('ContactL','ContactLController');

Route::group(['middleware' => 'auth'], function() {
  Route::resource('AdvisorAdmin','AdvisorAdminController');
  Route::get('Advisor/{id}/Destroy', 'AdvisorAdminController@destroy')->name('AdvisorDestroy');

  Route::resource('LaboratoryAdmin','LaboratoryAdminController');
  Route::get('Laboratory/{id}/Destroy', 'LaboratoryAdminController@destroy')->name('LaboratoryDestroy');

  Route::resource('BrandAdmin','BrandAdminController');
  Route::get('Brand/{id}/Destroy', 'BrandAdminController@destroy')->name('BrandDestroy');

  Route::get('serfarltda/Authentication', 'HomeController@index')->name('home');
});
Auth::routes();
