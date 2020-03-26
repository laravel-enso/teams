<?php

namespace LaravelEnso\Teams\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;
use LaravelEnso\Teams\App\Models\Team;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Team::class;
}
