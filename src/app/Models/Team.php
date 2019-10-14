<?php

namespace LaravelEnso\Teams\app\Models;

use LaravelEnso\Core\app\Models\User;
use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\app\Traits\Relations;
use LaravelEnso\Rememberable\app\Traits\Rememberable;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;

class Team extends Model
{
    use AvoidsDeletionConflicts, Rememberable, Relations;

    protected $fillable = ['name'];

    protected $loggableLabel = 'name';

    protected $loggable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function userIds()
    {
        return $this->users->pluck('id');
    }

    public function userList()
    {
        return $this->users->map(function ($user) {
            return [
                'name' => $user->person->name,
                'avatar' => $user->avatar,
            ];
        });
    }

    public function updateMembers(array $memberIds)
    {
        $synced = $this->users()->sync($memberIds);
        if (! empty($synced['attached']) || ! empty($synced['detached'])) {
            $this->fireModelEvent('updated-members', false);
        }
    }
}
