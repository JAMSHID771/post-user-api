<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\ControllerName;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class);
Route::apiResource('posts', PostController::class);