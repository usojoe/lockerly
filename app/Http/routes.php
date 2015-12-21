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
Route::get('itemtypelist', 'ItemController@itemTypeList');
Route::get('additemtype', 'ItemController@addItemType');
Route::post('saveitemtype', 'ItemController@saveItemType');
Route::get('edititemtype/{id}', 'ItemController@editItemType');
Route::any('updateitemtype/{id}', 'ItemController@updateItemType');
Route::get('deleteitemtype/{id}', 'ItemController@deleteItemType');

Route::any('useritemlist', 'ItemController@userItemList');
Route::any('assignuseritem', 'ItemController@assignUserItem');
Route::post('saveassignuseritem', 'ItemController@saveAssignUserItem');

Route::get('edituseritem/{id}', 'ItemController@editUserItem');
Route::post('updateuseritem/{id}', 'ItemController@updateUserItem');
Route::get('deleteuseritem/{id}', 'ItemController@deleteUserItem');


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