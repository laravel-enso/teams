<?php

namespace LaravelEnso\Avatar\DynamicsRelations;

use Closure;
use LaravelEnso\DynamicMethods\Contracts\Method;
use LaravelEnso\Teams\Models\Team;

class Teams implements Method
{
    public function name(): string
    {
        return 'teams';
    }

    public function closure(): Closure
    {
        return fn () => $this->belongsToMany(Team::class);
    }
}
