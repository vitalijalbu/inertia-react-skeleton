<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AdsetsController;
use App\Http\Controllers\RoiController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('index');
});


Route::prefix('accounts')->name('accounts')->group(function () {
    Route::get('/', [AccountsController::class, 'index'])->name('index');
    Route::get('/{slug}', [AccountsController::class, 'view'])->name('view');
    Route::get('/best', [AccountsController::class, 'index'])->name('best');
});

Route::prefix('adsets')->name('adsets')->group(function () {
    Route::get('/', [AdsetsController::class, 'index'])->name('index');
    Route::get('/{slug}', [AdsetsController::class, 'view'])->name('view');
});

Route::prefix('roi')->name('roi')->group(function () {
    Route::get('/', [RoiController::class, 'index'])->name('index');
    Route::get('/{slug}', [RoiController::class, 'view'])->name('view');
});
