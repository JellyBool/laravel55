<?php

Route::get('/', function () {
    return new \App\Mail\NewUser();
});

Route::resource('posts','PostController');

Route::post('phone','PhoneController@store');