<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Rout:apiResource('/my-route', UserController::class)->only('show');
