<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Teams\Http\Controllers\Destroy;
use LaravelEnso\Teams\Http\Controllers\Index;
use LaravelEnso\Teams\Http\Controllers\Options;
use LaravelEnso\Teams\Http\Controllers\Store;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/teams')
    ->as('administration.teams.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::post('', Store::class)->name('store');
        Route::delete('{team}', Destroy::class)->name('destroy');
        Route::get('options', Options::class)->name('options');
    });
