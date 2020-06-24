<?php

namespace LaravelEnso\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\Http\Resources\Team as Resource;
use LaravelEnso\Teams\Models\Team;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Team::with(['users.person', 'users.avatar'])->latest()->get()
        );
    }
}
