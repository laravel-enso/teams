<?php

namespace LaravelEnso\Teams\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Core\app\Models\User;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\app\Traits\Rememberable;

class Team extends Model
{
    use AvoidsDeletionConflicts, Rememberable;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function delete()
    {
        try {
            parent::delete();
        } catch (\Exception $exception) {
            throw new ConflictHttpException(__(
                'The team has activity in the system and cannot be deleted'
            ));
        }

        return ['message' => 'The team was successfully deleted'];
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
