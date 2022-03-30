<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', function () {
    return view('app');
});
Route::view('/','index');
Route::view('/movies','show');
 
Route::view('/blade/login','login');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

// Route::get('/', 'MoviesController@index')->name('movies.index');
// Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');

// Route::get('/tv', 'TvController@index')->name('tv.index');
// Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

// Route::get('/actors', 'ActorsController@index')->name('actors.index');
// Route::get('/actors/page/{page?}', 'ActorsController@index');

// Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show')