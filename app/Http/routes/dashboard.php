<?php
//DashBoard Routes
Route::group(['middleware' => ['auth', 'SetGlobalAuthVariables'],'namespace'=>'Dashboard', 'prefix'=>'dashboard'], function () {
    Route::get('/',['as'=>'dashboard.index','uses'=>'DashController@index']);
});