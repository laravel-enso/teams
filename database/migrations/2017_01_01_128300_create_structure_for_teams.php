<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForTeams extends Migration
{
    protected array $permissions = [
        ['name' => 'administration.teams.index', 'description' => 'Show teams', 'is_default' => false],
        ['name' => 'administration.teams.store', 'description' => 'Store newly created team', 'is_default' => false],
        ['name' => 'administration.teams.destroy', 'description' => 'Delete team', 'is_default' => false],
        ['name' => 'administration.teams.options', 'description' => 'Get options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Teams', 'icon' => 'users-cog', 'route' => 'administration.teams.index', 'order_index' => 300, 'has_children' => false,
    ];

    protected ?string $parentMenu = 'Administration';
}
