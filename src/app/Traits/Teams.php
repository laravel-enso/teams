<?php

namespace LaravelEnso\Teams\app\Traits;

use LaravelEnso\Teams\app\Models\Team;

trait Teams
{
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
