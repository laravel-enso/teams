<?php

namespace LaravelEnso\Teams\App\Traits;

use LaravelEnso\Teams\App\Models\Team;

trait Teams
{
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
