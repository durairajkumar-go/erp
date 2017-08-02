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

Route::group(['middleware' => ['locale']], function(){


Route::auth();

Route::get('/locale/{id}', function ($id) {
	Session::set('locale',$id);
	return redirect()->back();
});

Route::group(['middleware' => ['auth','menu']], function(){

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('masters.profile');
});

// Location Master
Route::resource('location', 'Masters\LocationController');

Route::controller('location_data', 'Masters\LocationController', [
    'anyData'  => 'location_data.data',
]);

Route::get('location/change/{id}', 'Masters\LocationController@change');

Route::get('location_search', 'Masters\LocationController@search');

//Location Master End



// Store Master
Route::resource('store', 'Masters\storeController');

Route::controller('store_data', 'Masters\storeController', [
    'anyData'  => 'store_data.data',
]);

Route::get('store/change/{id}', 'Masters\storeController@change');
//Sore Master End


});
});