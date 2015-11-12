<?php
//DashBoard Routes
Route::group(['middleware' => ['auth', 'setUserVariable'],'namespace'=>'Dashboard', 'prefix'=>'dashboard'], function () {
    Route::get('/',['as'=>'dashboard.index','uses'=>'DashController@index']);
});