<?php

use Illuminate\Support\Facades\Route;

Route::namespace('LaravelEnso\Teams\Http\Controllers')
    ->middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/teams')
    ->as('administration.teams.')
    ->group(function () {
        Route::get('', 'Index')->name('index');
        Route::post('', 'Store')->name('store');
        Route::delete('{team}', 'Destroy')->name('destroy');
        Route::get('options', 'Options')->name('options');
    });
