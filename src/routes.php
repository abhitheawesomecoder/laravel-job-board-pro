<?php
/*
Route::get('admin', function () {
    return view('vendor.abhitheawesomecoder.jobboardpro.views.dashboard');
});
*/

Route::get('/contact', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@contact');
Route::get('/job-board', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobboard');
Route::post('/job-search', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobsearch');
Route::get('/job-details/{id}', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobdetails');
Route::post('/sendcontactmail', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@sendcontactmail');

Route::group(['middleware' => 'auth'], function () {

Route::get('/admin', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@home');


});
