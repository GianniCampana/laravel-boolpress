<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@index');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function(){
        route::get('/', 'HomeController@index')->name('home');
        Route::resource('/posts', 'PostController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
