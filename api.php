<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


Route::post('authenticate', [
    'uses' => 'ApiAuthController@authenticate', 'as' => 'authenticate'
]);

Route::post('auth/register', [
    'uses' => 'AccountController@register', 'as' => 'register'
]);

Route::post('auth/login', [
    'uses' => 'AccountController@login', 'as' => 'login'
]);
