<?php

namespace LaravelEnso\Teams\App\Http\Requests;

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
        $rule = Rule::unique('teams', 'name');

        return $this->has('id')
            ? $rule->ignore($this->get('id'))
            : $rule;
    }
}
