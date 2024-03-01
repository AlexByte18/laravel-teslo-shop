<?php

use Modules\Category\Category;
use Illuminate\Support\Facades\Route;
use Modules\Category\CategoryController;


Route::prefix('api/v1')->middleware(['api', 'auth:sanctum'])->group(function () {
    Route::resource('/categories', CategoryController::class);
});
