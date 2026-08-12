<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::prefix('journals')
    ->name('journals.')
    ->controller(JournalController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{journal:uuid}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{journal:uuid}', 'update')->name('update');
        Route::delete('/{journal:uuid}', 'destroy')->name('destroy');
    });