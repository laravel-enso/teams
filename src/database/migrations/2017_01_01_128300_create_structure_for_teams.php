<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\app\Enums\Types;

class CreateStructureForTeams extends Migration
{
    protected $permissions = [
        ['name' => 'administration.teams.index', 'description' => 'Show teams', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.teams.store', 'description' => 'Store newly created team', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.teams.destroy', 'description' => 'Delete team', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.teams.options', 'description' => 'Get options for select', 'type' => Types::Read, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Teams', 'icon' => 'users-cog', 'route' => 'administration.teams.index', 'order_index' => 300, 'has_children' => false,
    ];

    protected $parentMenu = 'Administration';
}
