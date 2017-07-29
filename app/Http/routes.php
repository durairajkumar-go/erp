<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'locale'], function(){


Route::auth();

Route::get('/locale/{id}', function ($id) {
	Session::set('locale',$id);
	return redirect()->back();
});

Route::group(['middleware' => ['auth']], function(){

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

// Location Master
Route::resource('location', 'Masters\LocationController');

Route::controller('location_data', 'Masters\LocationController', [
    'anyData'  => 'location_data.data',
]);

Route::get('location/change/{id}', 'Masters\LocationController@change');
//Location Master End

});
});
