<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/register/confirm/{token}','RegisterController@confirmEmail');