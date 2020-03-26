<?php

namespace LaravelEnso\Teams\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\App\Http\Resources\Team as Resource;
use LaravelEnso\Teams\App\Models\Team;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Team::with(['users.person', 'users.avatar'])->latest()->get()
        );
    }
}
