<?php
/*
Route::get('admin', function () {
    return view('vendor.abhitheawesomecoder.jobboardpro.views.dashboard');
});
*/

Route::group(['middleware' => 'web'], function () {
  
Route::get('/admin', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@home');


});
