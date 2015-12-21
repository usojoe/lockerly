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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//For User
Route::get('userList', 'HomeController@userList');
Route::get('adduser', 'HomeController@addUser');
Route::post('saveuser', 'HomeController@saveUser');
Route::get('edituser/{id}', 'HomeController@editUser');
Route::post('updateuser/{id}', 'HomeController@updateUser');
Route::get('deleteuser/{id}', 'HomeController@deleteUser');

//For items
Route::get('itemlist', 'ItemController@itemList');
Route::get('additem', 'ItemController@addItem');
Route::post('saveitem', 'ItemController@saveItem');
Route::get('edititem/{id}', 'ItemController@editItem');
Route::any('updateitem/{id}', 'ItemController@updateItem');
Route::get('deleteitem/{id}', 'ItemController@deleteItem');

//Login
Route::get('/', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');
Route::any('/logout', 'AuthController@logout');

Route::any('/dashboard', 'UserController@index');