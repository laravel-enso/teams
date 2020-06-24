<?php

namespace LaravelEnso\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\Traits\OptionsBuilder;
use LaravelEnso\Teams\Models\Team;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Team::class;
}
