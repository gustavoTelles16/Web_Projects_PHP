<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-user/{name}/{lastname}', [UserController::class, 'personalData']);

Route::get('/calculator/{operator}/{number1}/{number2}', [UserController::class, 'calculator']);

Route::get('/personal-user/{users}', [UserController::class, 'personalUser']);

Route::get('/product-table/{nameProduct}/{descriptions}/{prices}', [UserController::class, 'products']);