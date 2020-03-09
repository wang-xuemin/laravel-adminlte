<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Laravel', 'prefix' => 'laravel', 'as' => 'laravel'], function(){
    Route::get('list', 'LaravelController@list');
    Route::get('detail', 'LaravelController@detail');
    Route::get('index', 'LaravelController@index');
});