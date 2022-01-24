<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController, ClientController, BuyIntentionController};



Route::prefix('/')->middleware('auth')->group(function () {

    Route::view('dashboard/patner', 'dashboard.patner')->name('dashboard.patner');
    Route::view('patner/create', 'app.partner.create')->name('partner.create');
    Route::resource('patner/buy_intention', BuyIntentionController::class);
});

