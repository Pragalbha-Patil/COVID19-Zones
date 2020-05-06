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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'], function () {
    Route::get('/add-data-page', 'HomeController@getDataAddingPage')->name('add-data-page');
    Route::post('/add-data', 'HomeController@AddData')->name('add-data');

    Route::get('/view-data', 'HomeController@viewData')->name('view-data');
    Route::get('/delete-data/{id}', 'HomeController@deleteData');
    Route::get('/modify-data/{id}', 'HomeController@editDataPage');
    Route::post('/edit-data', 'HomeController@editData');

    Route::get('/get-database', function() {
        if ($handle = opendir(public_path('assets/database'))) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    // echo $entry."<br>"; // NAME OF THE FILE
                    echo "<a href=".asset("/assets/database/".$entry).">".$entry."</a> <br>";
                }
            }
            closedir($handle);
        }
    })->name('get-database');

    Route::get('/view-map', 'APIController@getMap')->name('map');
});
