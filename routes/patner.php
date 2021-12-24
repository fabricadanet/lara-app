<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::view('dashboard/patner', 'dashboard.patner')->name('dashboard.patner');
});

