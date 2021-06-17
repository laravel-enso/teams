<?php

namespace LaravelEnso\Teams\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateTeamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'nullable|exists:teams,id',
            'name' => ['required', $this->nameUnique()],
            'description' => 'string|nullable',
            'userIds' => 'array',
        ];
    }

    protected function nameUnique()
    {
        return Rule::unique('teams', 'name')->ignore($this->get('id'));
    }
}
