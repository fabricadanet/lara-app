<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\RealtyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Models\Realty;
use App\Models\Franchise;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        $realties = Realty::all();
        $franchises = Franchise::all();
        return view('dashboard', compact('realties', 'franchises'));
    })->name('dashboard');
//    Route::view('dashboard','dashboard')->name('dashboard');
    Route::get('franchises', [
        FranchiseController::class,
        'index',
    ])->name('franchises.index');

    Route::post('franchises', [
        FranchiseController::class,
        'store',
    ])->name('franchises.store');

    Route::get('franchises/create', [
        FranchiseController::class,
        'create',
    ])->name('franchises.create');

    Route::get('franchises/{id}', [
        FranchiseController::class,
        'show',
    ])->name('franchises.show');

    Route::get('franchises/{id}/edit', [
        FranchiseController::class,
        'edit',
    ])->name('franchises.edit');

    Route::post('franchises/{id}', [
        FranchiseController::class,
        'update',
    ])->name('franchises.update');

    Route::get('franchises/{id}', [
        FranchiseController::class,
        'destroy',
    ])->name('franchises.destroy');


    Route::get('clients', [
        ClientController::class,
        'index',
    ])->name('clients.index');

    Route::post('clients', [
        ClientController::class,
        'store',
    ])->name('clients.store');

    Route::get('clients/create', [
        ClientController::class,
        'create',
    ])->name('clients.create');

    Route::get('clients/{id}/show', [
        ClientController::class,
        'show',
    ])->name('clients.show');

    Route::get('clients/{id}/edit', [
        ClientController::class,
        'edit',
    ])->name('clients.edit');

    Route::post('clients/{id}', [
        ClientController::class,
        'update',
    ])->name('clients.update');

    Route::get('clients/{id}', [
        ClientController::class,
        'destroy',
    ])->name('clients.destroy');


    Route::get('realties', [
        RealtyController::class,
        'index',
    ])->name('realties.index');

    Route::post('realties', [
        RealtyController::class,
        'store',
    ])->name('realties.store');

    Route::get('realties/create', [
        RealtyController::class,
        'create',
    ])->name('realties.create');

    Route::get('realties/{id}/show', [
        RealtyController::class,
        'show',
    ])->name('realties.show');

    Route::get('realties/{id}/edit', [
        RealtyController::class,
        'edit',
    ])->name('realties.edit');

    Route::post('realties/{id}', [
        RealtyController::class,
        'update',
    ])->name('realties.update');

    Route::get('realties/{id}', [
        RealtyController::class,
        'destroy',
    ])->name('realties.destroy');

    Route::view('realtors/create','app.realtor.create')->name('realtors.create');

});

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/event.php';
require __DIR__.'/patner.php';
require __DIR__.'/admin.php';
require __DIR__.'/franchise.php';
require __DIR__.'/client.php';