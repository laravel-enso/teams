<?php

namespace LaravelEnso\Teams\app\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

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
        $rule = Rule::unique('teams', 'name');

        return $this->has('id')
            ? $rule->ignore($this->get('id'))
            : $rule;
    }
}
