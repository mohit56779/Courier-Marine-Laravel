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

Auth::routes(['register'=>false]);

Route::group(['as' => 'customer.', 'prefix'=> 'customer', 'namespace' => 'Customer','middleware' =>['auth','customer']],function(){
    Route::get('dashboard', 'DashboardController@index')-> name('dashboard');
    Route::post('parcel', 'ParcelController@store')-> name('parcel.store');
    Route::get('parcel', 'ParcelController@index')-> name('parcel.view');
    

});

Route::group(['as' => 'agent.', 'prefix'=> 'agent', 'namespace' => 'Agent','middleware' =>['auth','agent']],function(){
    Route::get('dashboard', 'DashboardController@index')-> name('dashboard');
    

});




Route::get('/home', 'HomeController@index')->name('home');
