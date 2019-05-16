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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Artikel
Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::post('/artikel', 'ArtikelController@tambah');
Route::post('/artikel/edit/', 'ArtikelController@edit')->name('edit-artikel');
Route::post('/artikel/delete/', 'ArtikelController@delete')->name('delete-artikel');
//Route::post('/artikel/image/', 'ArtikelController@image')->name('image-artikel');
//Route::post('/artikel/video/', 'ArtikelController@video')->name('video-artikel');
//Route::post('/artikel/isi/', 'ArtikelController@isi')->name('isi-artikel');


Route::get('/komentar', 'KomentarController@index')->name('komentar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
