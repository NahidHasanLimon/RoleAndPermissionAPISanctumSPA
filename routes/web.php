<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
