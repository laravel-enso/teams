<?php

namespace LaravelEnso\Teams\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\TrackWho\App\Http\Resources\TrackWho;

class Team extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'userIds' => $this->userIds(),
            'users' => TrackWho::collection($this->whenLoaded('users')),
            'edit' => false,
        ];
    }
}
