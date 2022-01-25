<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::resource('event', EventController::class);
    Route::get('/getevents', [EventController::class, 'getEvents'])->name('event.getEvents');
});