<?php
// Login and Register Routes
Route::group(['namespace' => 'Auth'], function () {
//Login
    Route::get('/login',['as'=>'auth.login','uses'=>'AuthController@getLogin']);
    Route::post('/login', ['as'=>'auth.post_login','uses'=>'AuthController@postLogin']);

//Register
    Route::get('/register', ['as'=>'auth.register','uses'=>'AuthController@getRegister']);
    Route::post('/register', ['as'=>'auth.post_register','uses'=>'AuthController@postRegister']);

//Logout
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', ['as'=>'auth.logout','uses'=>'AuthController@getLogout']);
    });
});