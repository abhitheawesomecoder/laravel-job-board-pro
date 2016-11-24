<?php

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});
