<?php

use Illuminate\Support\Facades\Route;
use Modules\User\UserController;



Route::prefix('api/v1')->middleware('api')->group(function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::resource('/users', UserController::class);
});
