<?php

use Illuminate\Support\Facades\Route;


/* Route::get('/', 'PageController@index'); */

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

/* Route::get('/home', 'HomeController@index')->name('home'); */


/* rotta che serve a vue per gestire tutte le rotte possibili alternative a quelle Auth e admin */
/* Route::get('{any?}', 'PageController@index')->where('any','.*'); */


Route::get('{any?}', function(){
    return view('guest.home');
})->where('any','.*');
