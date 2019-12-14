<?php

namespace LaravelEnso\Teams\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;
use LaravelEnso\Teams\app\Models\Team;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Team::class;
}
