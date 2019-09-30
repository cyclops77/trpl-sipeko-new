<?php

// TEST //

Route::get('/test', function () {
    return view('test.index');
});

Route::post('/store','DocumentController@store');

// TEST //

Route::get('/login', function () {
    return view('public.login');
});
Route::get('/registrasi', function () {
    return view('public.register');
});

Route::post('/send/registration','RegisterController@create');

Route::post('/postlogin','LoginController@logon');

Route::get('/logout','LoginController@logout');



//===||login SEMUA||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan,disper,admin']], function(){

Route::get('/index', 'LoginController@baseLogin');

});

//===||login Disper||===// 

Route::group(['middleware' => ['auth','checkRole:disper']], function(){

Route::get('/list-pemohon', 'UsahaController@list');

Route::post('/acc-pemohon','UsahaController@accPemohon');

Route::get('/data-usaha','UsahaController@terverifikasi');
});

//===||login wirausaha||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan']], function(){

Route::get('/ajukan-usaha','UsahaController@index');

Route::post('/send/izin-perusahaan','UsahaController@form');

Route::get('/usaha-saya','UsahaController@usahaSaya');

Route::get('/cetak-pdf/{id}','UsahaController@cektakPDF');

});

//===||login admin||===// 

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::get('/buat-akun-disper','DisperController@index');

Route::post('/send/register-disper','DisperController@create');

});
