<?php
// Site Routes
Route::get('/',['as'=>'home.index', function(){
    return view('welcome');
}]);