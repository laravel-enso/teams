<?php

namespace LaravelEnso\Teams;

use LaravelEnso\Teams\app\Models\Team;
use LaravelEnso\Searchable\SearchServiceProvider as ServiceProvider;

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
