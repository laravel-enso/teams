<?php

namespace LaravelEnso\Teams\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\app\Models\Team;
use Illuminate\Foundation\Validation\ValidatesRequests;
use LaravelEnso\Teams\app\Http\Resources\Team as Resource;
use LaravelEnso\Teams\app\Http\Requests\ValidateTeamRequest;

class TeamController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        return Resource::collection(
            Team::with('users')
                ->latest()
                ->get()
        );
    }

    public function store(ValidateTeamRequest $request)
    {
        $team = Team::store($request->validated());

        return [
            'message' => __('The team was successfully saved'),
            'team' => new Resource($team),
        ];
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return [
            'message' => __('The team was successfully deleted'),
        ];
    }
}
