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
        $nameUnique = Rule::unique('teams', 'name');

        $nameUnique = $this->has('id')
            ? $nameUnique->ignore($this->get('id'))
            : $nameUnique;

        return [
            'id' => 'nullable|exists:teams,id',
            'name' => ['required', $nameUnique],
            'description' => 'string|nullable',
            'userIds' => 'array',
        ];
    }
}
