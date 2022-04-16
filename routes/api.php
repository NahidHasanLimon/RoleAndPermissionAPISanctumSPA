<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\SubModuleController;
use App\Http\Controllers\API\ModuleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PermissionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', [UserController::class,'index'] );

Route::post('user/set-permission', [UserController::class, 'store_permission']);



Route::get('system-permissions', [PermissionController::class, 'index']);


Route::group(['prefix' => 'module', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [ModuleController::class, 'index']);
    Route::post('/', [ModuleController::class, 'store']);
    Route::get('edit/{id}', [ModuleController::class, 'edit']);
    Route::post('update/{id}', [ModuleController::class, 'update']);
    Route::delete('delete/{id}', [ModuleController::class, 'delete']);
});
Route::group(['prefix' => 'sub-module', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [SubModuleController::class, 'index']);
    Route::post('/', [SubModuleController::class, 'store']);
    Route::get('edit/{id}', [SubModuleController::class, 'edit']);
    Route::post('update/{id}', [SubModuleController::class, 'update']);
    Route::delete('delete/{id}', [SubModuleController::class, 'delete']);
});


// Route::group(['prefix' => 'books', 'middleware' => 'auth:sanctum'], function () {
//     Route::get('/', [BookController::class, 'index']);
//     Route::post('add', [BookController::class, 'add']);
//     Route::get('edit/{id}', [BookController::class, 'edit']);
//     Route::post('update/{id}', [BookController::class, 'update']);
//     Route::delete('delete/{id}', [BookController::class, 'delete']);
// });