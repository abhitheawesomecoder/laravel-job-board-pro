<?php
/*
Route::get('admin', function () {
    return view('vendor.abhitheawesomecoder.jobboardpro.views.dashboard');
});
*/

Route::get('/contact', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@contact');

Route::post('/sendcontactmail', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@sendcontactmail');

Route::group(['middleware' => 'auth'], function () {

Route::get('/admin', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@home');


});
