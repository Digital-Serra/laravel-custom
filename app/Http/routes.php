<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Site Routes
Route::get('/',['as'=>'home.index', function(){
    return view('welcome');
}]);


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

//DashBoard Routes
Route::group(['middleware' => 'auth','namespace'=>'Dashboard'], function () {
    Route::get('/dashboard',['as'=>'dashboard.index','uses'=>'DashController@index']);
});
