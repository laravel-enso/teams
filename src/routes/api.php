<?php

Route::namespace('LaravelEnso\Teams\app\Http\Controllers')
    ->middleware(['web', 'auth', 'core'])
    ->prefix('api/administration')
    ->as('administration.')
    ->group(function () {
        Route::prefix('team')->as('team.')
            ->group(function () {
                Route::get('options', 'TeamSelectController@options')
                    ->name('options');
            });

        Route::resource('teams', 'TeamController', ['only' => ['index', 'store', 'destroy']]);
    });
