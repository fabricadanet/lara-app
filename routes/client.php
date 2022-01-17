<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;




Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/buy_intention', [ClientController::class,'buyIntention'])->name('clients.intention');
    Route::view('sales_order', 'app.client.sale_order.index')->name('clients.sales_order');
});