<?php

namespace LaravelEnso\Teams\app\Models;

use LaravelEnso\Core\app\Models\User;
use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Rememberable\app\Traits\Rememberable;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;

class Team extends Model
{
    use AvoidsDeletionConflicts, Rememberable;

    protected $fillable = ['name'];

    protected $loggableLabel = 'name';

    protected $loggable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function syncMembers($userIds)
    {
        $synced = $this->users()->sync($userIds);

        if (count($synced['attached']) || count($synced['detached'])) {
            $this->logEvent('updated the members', 'users');
        }
    }

    public function delete()
    {
        try {
            parent::delete();
        } catch (\Exception $e) {
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
}
