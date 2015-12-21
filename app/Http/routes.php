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
//For Users
Route::get('/', 'HomeController@userList');
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

//For rentals
Route::get('rentallist', 'RentalController@rentalList');
Route::get('addrental', 'RentalController@addRental');
Route::post('saverental', 'RentalController@saveRental');
Route::get('editrental/{id}', 'RentalController@editRental');
Route::any('updaterental/{id}', 'RentalController@updateRental');
Route::get('deleterental/{id}', 'RentalController@deleteRental');

/*
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));
/*
    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
