<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PermissionController;
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');



Route::get('/', 
function(){
    return view('welcome');}
);
Route::get('system', [PermissionController::class, 'index']);