<?php

namespace LaravelEnso\Teams\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\App\Models\Team;

class Destroy extends Controller
{
    public function __invoke(Team $team)
    {
        $team->delete();

        return ['message' => __('The team was successfully deleted')];
    }
}
