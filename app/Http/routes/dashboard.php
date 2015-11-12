<?php
//DashBoard Routes
Route::group(['middleware' => ['auth', 'setUserVariable'],'namespace'=>'Dashboard'], function () {
    Route::get('/dashboard',['as'=>'dashboard.index','uses'=>'DashController@index']);
});