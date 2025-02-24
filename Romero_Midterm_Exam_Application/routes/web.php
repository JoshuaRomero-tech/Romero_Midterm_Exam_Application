<?php

use App\Http\Controllers\ProductController;

Route::get('/anime', [ProductController::class, 'index']);