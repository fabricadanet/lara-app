<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {
    Route::view('franchise/realtors', 'app.franchise.realtor.index')->name('franchises.realtors');
    Route::view('franchise/partners', 'app.franchise.patner.index')->name('franchises.partners');
    Route::view('franchise/intentions', 'app.franchise.intention.index')->name('franchises.intention');

    Route::view('dashboard/franchise', 'dashboard.franchise')->name('dashboard.franchise');
});

