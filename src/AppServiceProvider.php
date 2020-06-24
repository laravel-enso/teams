<?php

namespace LaravelEnso\Teams;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Avatar\DynamicsRelations\Teams;
use LaravelEnso\Core\Models\User;
use LaravelEnso\DynamicMethods\Services\Methods;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        Methods::bind(User::class, [Teams::class]);
    }
}
