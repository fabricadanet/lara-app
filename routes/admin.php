<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::view('dashboard/admin', 'dashboard.admin')->name('dashboard.admin');
});

