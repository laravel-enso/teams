<?php

namespace LaravelEnso\Teams\App\Exceptions;

use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

class Team extends ConflictHttpException
{
    public static function users()
    {
        return new static(__('The team has users and cannot be deleted'));
    }
}
