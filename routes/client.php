<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BuyIntentionController;
use App\Http\Controllers\SaleOrderController;




Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/buy_intention', [ClientController::class,'buyIntention'])->name('clients.intention');
    Route::get('/buy_intention/{id}', [BuyIntentionController::class,'show'])->name('buy_intention.show');
    Route::get('/buy_intention/{id}/create_sale', [BuyIntentionController::class,'createSale'])->name('buy_intention.sale');
    Route::get('sales_order',[SaleOrderController::class, 'index'])->name('clients.sales_order');

});