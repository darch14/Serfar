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
// ----------------------- INTERFAZ USUARIO ------------------------------------
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
Route::get('serfarltda/Portfolio', [
    'as' => 'Portfolio', 'uses' => 'PortfolioController@index'
]);
Route::post('Product/Portfolio/store', 'PortfolioController@store')->name('PortfolioStore');
Route::get('Product/{id}/Portfolio', 'PortfolioController@detail')->name('PortfolioDetail');
Route::resource('ContactL','ContactLController');
// -----------------------------------------------------------------------------

Route::get('serfarltda/error', function(){
  return view('fragment.error');
});
// -------------------- INTERFAZ ADMINISTRATIVA --------------------------------
Route::group(['middleware' => 'auth'], function() {
  Route::resource('AdvisorAdmin','AdvisorAdminController');
  Route::get('Advisor/{id}/Destroy', 'AdvisorAdminController@destroy')->name('AdvisorDestroy');

  Route::resource('LaboratoryAdmin','LaboratoryAdminController');
  Route::get('Laboratory/{id}/Destroy', 'LaboratoryAdminController@destroy')->name('LaboratoryDestroy');

  Route::resource('ProductAdmin','ProductAdminController');
  Route::get('Product/{id}/Destroy', 'ProductAdminController@destroy')->name('ProductDestroy');

  Route::get('home', 'HomeController@index')->name('home');

  // ------------------------------ Exports ------------------------------------
  Route::resource('ExportOption','ExportController');
  // ---------------------------------------------------------------------------
  // ------------------------------- Import ------------------------------------
  Route::resource('ImportOption','ImportController');
  // ---------------------------------------------------------------------------
});
Auth::routes();
// -----------------------------------------------------------------------------
