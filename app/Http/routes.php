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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('task', 'TaskController');

Route::resource('user', 'UserController');


Route::controller('tasks', 'TaskController', [
    'anyData'  => 'tasks.data',
    'getIndex' => 'tasks',
]);


Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);

Route::get('/locale', function () {

});

Route::resource('company', 'Masters\CompanyController');

Route::resource('location', 'Masters\LocationController');

Route::controller('location_data', 'Masters\LocationController', [
    'anyData'  => 'location_data.data',
]);

Route::get('location/change/{id}', 'Masters\LocationController@change');




});
