<?php

Route::namespace('LaravelEnso\Teams\app\Http\Controllers')
    ->middleware(['web', 'auth', 'core'])
    ->prefix('api/administration/teams')
    ->as('administration.teams.')
    ->group(function () {
        require 'app/teams.php';
    });
