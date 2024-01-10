<?php

namespace LaravelEnso\Teams\DynamicRelations;

use Closure;
use LaravelEnso\DynamicMethods\Contracts\Relation;
use LaravelEnso\Teams\Models\Team;
use LaravelEnso\Users\Models\User;

class Teams implements Relation
{
    public function bindTo(): array
    {
        return [User::class];
    }

    public function name(): string
    {
        return 'teams';
    }

    public function closure(): Closure
    {
        return fn (User $user) => $user->belongsToMany(Team::class);
    }
}
