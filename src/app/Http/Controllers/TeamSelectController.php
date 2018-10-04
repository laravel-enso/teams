<?php

namespace LaravelEnso\Teams\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\app\Models\Team;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class TeamSelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Team::class;
}
