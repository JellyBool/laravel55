<?php

Route::get('/', function () {
    auth()->loginUsingId(1);
    return view('welcome');
});

Route::resource('posts','PostController');

Route::post('phone','PhoneController@store');