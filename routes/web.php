<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/register/confirm/{token}','RegisterController@confirmEmail');

Route::get('/sendemail', 'SendingEmailController@sendingEmail');
Route::post('sendmail', 'SendMailController@sendMail');

Route::get('editemail/{id}', 'SendMailController@editSending');