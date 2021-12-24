<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::prefix('/')->middleware('auth')->group(function () {

    Route::view('buy_intention', 'app.client.intention.index')->name('clients.intention');
    Route::view('sales_order', 'app.client.sale_order.index')->name('clients.sales_order');
});

