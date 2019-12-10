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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/','DataWisataController@index');

// Route::get('/data_wisata', function () {
//     return view('tambah_data_wisata');
// });

Route::get('/data_wisata', 'DataWisataController@tampilan_data');
Route::get('/data_wisata/tambah', 'DataWisataController@tambah');
Route::post('/data_wisata/proses', 'DataWisataController@proses_upload');
Route::post('/data_wisata/store','DataWisataController@store');
Route::get('/data_wisata/edit/{id}','DataWisataController@edit');
Route::post('/data_wisata/update','DataWisataController@update');
Route::get('/data_wisata/hapus/{id}','DataWisataController@hapus');

Route::get('/login', 'SessionController@index');
Route::post('/post-login', 'SessionController@postLogin'); 
Route::get('/registration', 'SessionController@registration');
Route::post('/post-registration', 'SessionController@postRegistration'); 
Route::get('/dashboard', 'SessionController@dashboard'); 
Route::get('/logout', 'SessionController@logout');


Route::get('/wisata/{id}','DataWisataController@wisata');

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/home', 'HomeController@index')->name('home');

