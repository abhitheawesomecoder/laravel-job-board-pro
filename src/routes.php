<?php
/*
Route::get('admin', function () {
    return view('vendor.abhitheawesomecoder.jobboardpro.views.dashboard');
});
*/
Route::group(['middleware' => 'web'], function () {

Route::get('/', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@home');

Route::get('/contact', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@contact');
Route::get('/job-board', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobboard');
Route::post('/job-search', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobsearch');
Route::get('/job-details/{id}', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobdetails');
Route::post('/sendcontactmail', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@sendcontactmail');

Route::get('/candidates', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@candidates');
Route::get('/candidate-details/{id}', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@candidatedetails');
Route::post('/candidate-search', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@candidatesearch');

});



Route::group(['middleware' => ['web','auth']], function () {

  Route::get('/activate/{jobid}', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@activate');

  Route::get('/jobs-posted', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobsposted');
  Route::get('/resumes-posted', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@resumesposted');
  Route::get('/jobs-applied', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@jobsapplied');

  Route::get('/apply/{jobid}', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@apply');
  Route::get('/post-job', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@postjob');
  Route::get('/post-resume', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@postresume');
  Route::post('/post-resume', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@saveresumepost');
  Route::post('/post-job', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@savejobpost');

//Route::get('/admin', 'abhitheawesomecoder\jobboardpro\controllers\JobboardController@home');


});
