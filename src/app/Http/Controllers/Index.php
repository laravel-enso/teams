<?php

namespace LaravelEnso\Teams\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\app\Models\Team;
use LaravelEnso\Teams\app\Http\Resources\Team as Resource;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Team::with(['users.person', 'users.avatar'])
                ->latest()
                ->get()
        );
    }
}
