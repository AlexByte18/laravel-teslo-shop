<?php

use Modules\Category\Category;
use Illuminate\Support\Facades\Route;
use Modules\Category\CategoryController;

Route::resource('api/categories', CategoryController::class);
