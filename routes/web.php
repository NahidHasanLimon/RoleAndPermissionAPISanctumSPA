<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue', function () {
    return view('app');
});
Route::view('/','index');
Route::view('/movie','show');
