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
    return view('dashboard');
});

route::get('/profil', 'ProfilController@index');
// route::get('/profil/create','ProfilController@create');
// route::post('/profil', 'ProfilController@store');
// route::get('/profil/{pertanyaan_id}', 'ProfilController@show');
// route::get('/profil/{pertanyaan_id}/edit', 'ProfilController@edit');
// route::put('/profil/{pertanyaan_id}', 'ProfilController@update');
// route::delete('/profil/{pertanyaan_id}', 'ProfilController@destroy');

route::get('/kategori', 'KategoriController@index');
route::get('/kategori/create','KategoriController@create')->name('kategori.create');
route::post('/kategori', 'KategoriController@store');
route::get('/kategori/{kategori_id}', 'KategoriController@show');
route::get('/kategori/{kategori_id}/edit', 'KategoriController@edit');
route::put('/kategori/{kategori_id}', 'KategoriController@update');
route::delete('/kategori/{kategorin_id}', 'KategoriController@destroy');

route::get('/buku', 'BukuController@index');
route::get('/buku/create','BukuController@create')->name('buku.create');

// route::post('/profil', 'ProfilController@store');
// route::get('/profil/{pertanyaan_id}', 'ProfilController@show');
// route::get('/profil/{pertanyaan_id}/edit', 'ProfilController@edit');
// route::put('/profil/{pertanyaan_id}', 'ProfilController@update');
// route::delete('/profil/{pertanyaan_id}', 'ProfilController@destroy');



// route::resource('profil','ProfilController');
// route::resource('buku','BukuController');
// route::resource('kategori','KategoriController');