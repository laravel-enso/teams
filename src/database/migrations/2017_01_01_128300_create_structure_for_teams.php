<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForTeams extends StructureMigration
{
    protected $permissions = [
        ['name' => 'administration.teams.index', 'description' => 'Show teams', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.teams.store', 'description' => 'Store newly created team', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.teams.destroy', 'description' => 'Delete team', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.teams.options', 'description' => 'Get options for select', 'type' => 0, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Teams', 'icon' => 'users-cog', 'route' => 'administration.teams.index', 'order_index' => 300, 'has_children' => false,
    ];

    protected $parentMenu = 'Administration';
}
