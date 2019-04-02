<?php

namespace LaravelEnso\Teams\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Team extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'userIds' => $this->userIds(),
            'users' => $this->userList(),
            'edit' => false,
        ];
    }
}
