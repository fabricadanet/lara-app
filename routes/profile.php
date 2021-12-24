<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::resource('profile', ProfileController::class);
});

