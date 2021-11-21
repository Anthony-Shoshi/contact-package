<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'AnthonyShoshi\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@create');
    Route::post('contact', 'ContactController@store');
});
