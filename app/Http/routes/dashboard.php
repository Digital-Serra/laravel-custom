<?php
//DashBoard Routes
Route::group(['middleware' => 'auth','namespace'=>'Dashboard'], function () {
    Route::get('/dashboard',['as'=>'dashboard.index','uses'=>'DashController@index']);
});