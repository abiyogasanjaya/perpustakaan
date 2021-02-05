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
    return view('master');
});

// route::get('/profil/create','ProfilController@create');
// route::post('/profil', 'ProfilController@store');
// route::get('/profil', 'ProfilController@index');
// route::get('/profil/{pertanyaan_id}', 'ProfilController@show');
// route::get('/profil/{pertanyaan_id}/edit', 'ProfilController@edit');
// route::put('/profil/{pertanyaan_id}', 'ProfilController@update');
// route::delete('/profil/{pertanyaan_id}', 'ProfilController@destroy');


route::resource('profil','ProfilController');
route::resource('buku','BukuController');
route::resource('kategori','KategoriController');