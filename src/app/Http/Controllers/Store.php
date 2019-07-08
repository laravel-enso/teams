<?php

namespace LaravelEnso\Teams\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\app\Models\Team;
use LaravelEnso\Teams\app\Http\Resources\Team as Resource;
use LaravelEnso\Teams\app\Http\Requests\ValidateTeamRequest;

class Store extends Controller
{
    public function __invoke(ValidateTeamRequest $request)
    {
        $team = Team::updateOrCreate(
            ['id' => $request->get('id')],
            ['name' => $request->get('name')]
        );

        $team->syncMembers($request->get('userIds'));

        return [
            'message' => __('The team was successfully saved'),
            'team' => new Resource($team->load(['users.person', 'users.avatar'])),
        ];
    }
}
