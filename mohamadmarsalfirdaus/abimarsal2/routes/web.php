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

/* Router Only
Route::get("/say", function(){
    return "Say Hello ";
});

// router with data
Route::get("/u/{nama}/{alamat}", function($nama,$alamat){
    return "Welcome " . $nama . " Alamat ". $alamat;
});
// Router with controller
Route::get("/hi","MainController@index");

Route::get("/hello","MainController@hello");

Route::get("/welcome","MainController@welcome");

// Router with Controller and Model
Route::get("/user","MainController@ambildatauser");
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/artikel/create', 'artikelController@create')->name('artikel.create')->middleware('auth');

Route::post('/artikel/create', 'artikelController@store')->name('artikel.store');
