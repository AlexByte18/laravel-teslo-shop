<?php

use Illuminate\Support\Facades\Route;
use Modules\User\UserController;

Route::resource('api/users', UserController::class);
