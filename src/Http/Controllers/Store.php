<?php

namespace LaravelEnso\Teams\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Teams\Http\Requests\ValidateTeamRequest;
use LaravelEnso\Teams\Http\Resources\Team as Resource;
use LaravelEnso\Teams\Models\Team;

class Store extends Controller
{
    public function __invoke(ValidateTeamRequest $request)
    {
        $team = Team::updateOrCreate(
            ['id' => $request->get('id')],
            ['name' => $request->get('name')]
        );

        $team->updateMembers($request->get('userIds'));

        return [
            'message' => __('The team was successfully saved'),
            'team' => new Resource($team->load(['users.person', 'users.avatar'])),
        ];
    }
}
