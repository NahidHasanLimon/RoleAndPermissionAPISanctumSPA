<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\SubModuleController;
use App\Http\Controllers\API\ModuleController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PermissionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/auth/user', [AuthController::class,'index'] );





Route::get('system-permissions', [PermissionController::class, 'index']);
Route::post('set-permission', [AuthController::class, 'store_permission']);

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


Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    // Route::get('edit/{id}', [UserController::class, 'edit']);
    // Route::post('update/{id}', [UserController::class, 'update']);
    // Route::delete('delete/{id}', [UserController::class, 'delete']);
    
    Route::post('/permission', [UserController::class, 'store_permission']);
});
