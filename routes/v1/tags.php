<?php

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::prefix('tags')
    ->name('tags.')
    ->controller(TagController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/{tag:uuid}', 'show')->name('show');
        Route::match(['put', 'patch'], '/{tag:uuid}', 'update')->name('update');
        Route::delete('/{tag:uuid}', 'destroy')->name('destroy');
    });