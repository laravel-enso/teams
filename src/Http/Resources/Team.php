<?php

namespace LaravelEnso\Teams\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\Core\Http\Resources\User;

class Team extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'userIds' => $this->userIds(),
            'users' => User::collection($this->whenLoaded('users')),
            'edit' => false,
        ];
    }
}
