<?php

namespace LaravelEnso\Teams;

use LaravelEnso\Searchable\SearchServiceProvider as ServiceProvider;
use LaravelEnso\Teams\App\Models\Team;

class SearchServiceProvider extends ServiceProvider
{
    public $register = [
        Team::class => [
            'group' => 'Team',
            'attributes' => ['name'],
            'label' => 'name',
            'permissionGroup' => 'administration.teams',
        ],
    ];
}
