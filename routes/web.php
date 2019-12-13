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


Route::get('/','HomeController@index');



Route::get('/data_wisata', 'DataWisataController@tampilan_data');
Route::get('/data_wisata/tambah', 'DataWisataController@tambah');
Route::post('/data_wisata/store','DataWisataController@store');
Route::get('/data_wisata/edit/{id}','DataWisataController@edit');
Route::post('/data_wisata/update','DataWisataController@update');
Route::get('/data_wisata/hapus/{id}','DataWisataController@hapus');

Route::get('/login', 'SessionController@index');
Route::post('/post-login', 'SessionController@postLogin'); 
Route::get('/registration', 'SessionController@registration');
Route::post('/post-registration', 'SessionController@postRegistration'); 
Route::get('/dashboard', 'SessionController@dashboard'); 
Route::post('/logout', 'SessionController@logout');

Route::get('/wisata/{nama}','DataWisataController@wisata');
Route::get('/cari','DataWisataController@cari');
Route::post('/wisata/comment','DataWisataController@comment');

Route::get('/about','HomeController@about');


Route::get('/blog', function(){
    return view('blog');
});
