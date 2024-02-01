<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redis;
 
Route::get('/publish', function () {
    Redis::publish('trueme-channel', json_encode([
        'name' => 'This is message is publish from laravel'
    ]));
});

Route::get('/', function () {
    return view('welcome');
});
