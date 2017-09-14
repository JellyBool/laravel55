<?php

Route::get('/', function () {
    $user = \App\User::with('posts')->find(5);

    return new \App\Http\Resources\User($user);
});

Route::resource('posts','PostController');

Route::post('phone','PhoneController@store');

Route::view('welcome', 'welcome', ['name' => 'Jelly']);