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
Route::resource('store', 'Masters\StoreController');

Route::controller('store_data', 'Masters\StoreController', [
    'anyData'  => 'store_data.data',
]);

Route::get('store/change/{id}', 'Masters\StoreController@change');
//Sore Master End

// Route Master
Route::resource('route', 'Masters\RouteController');

 Route::controller('route_data', 'Masters\RouteController', [
    'anyData'  => 'route_data.data',
]);

Route::get('route/change/{id}', 'Masters\RouteController@change'); 
//Route Master End

// Vehicle Master
Route::resource('vehicle', 'Masters\VehicleController');

Route::controller('vehicle_data', 'Masters\VehicleController', [
    'anyData'  => 'vehicle_data.data',
]);

Route::get('vehicle/change/{id}', 'Masters\VehicleController@change');
//Vehicle Master End

// Roles Master
Route::resource('role', 'Masters\RoleController');

Route::controller('role_data', 'Masters\RoleController', [
    'anyData'  => 'role_data.data',
]);

Route::get('role/change/{id}', 'Masters\RoleController@change');
Route::get('role/menu_mapping/{id}', 'Masters\RoleController@menuMapping');
//Roles Master End

// Menu Master
Route::resource('menu', 'Masters\MenuController');

Route::controller('menu_data', 'Masters\MenuController', [
    'anyData'  => 'menu_data.data',
]);

Route::get('menu/change/{id}', 'Masters\MenuController@change');
//Menu Master End

// Grade Master
Route::resource('grade', 'Production\GradeController');

Route::controller('grade_data', 'Production\GradeController', [
    'anyData'  => 'grade_data.data',
]);

Route::get('grade/change/{id}', 'Production\GradeController@change');
//Grade Master End

// Process Master
Route::resource('process', 'Production\ProcessController');

Route::controller('process_data', 'Production\ProcessController', [
    'anyData'  => 'process_data.data',
]);

Route::get('process/change/{id}', 'Production\ProcessController@change');
//Process Master End

});
});