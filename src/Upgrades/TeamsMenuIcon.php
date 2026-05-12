<?php

namespace LaravelEnso\Teams\Upgrades;

use Illuminate\Support\Facades\DB;
use LaravelEnso\Upgrade\Contracts\MigratesData;

class TeamsMenuIcon implements MigratesData
{
    public function isMigrated(): bool
    {
        return $this->query()->doesntExist();
    }

    public function migrateData(): void
    {
        $this->query()->update(['icon' => 'users-gear']);
    }

    private function query()
    {
        return DB::table('menus')
            ->whereIn('permission_id', DB::table('permissions')
                ->select('id')
                ->where('name', 'administration.teams.index'))
            ->where('icon', 'users-cog');
    }
}
