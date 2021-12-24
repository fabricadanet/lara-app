<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::view('dashboard/franchise', 'dashboard.franchise')->name('dashboard.franchise');
});

