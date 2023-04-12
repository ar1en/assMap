<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DUsersDefaultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public static function rules(): array
    {
        return [
            'name' => ['required','string'],
            'rel_vacancies' => ['nullable'],
            'rel_vacancies.*' => ['nullable','uuid','exists:ent_vacancies,id', 'unique:rel_user_vacancy,vacancy'],
            'rel_roles' => ['nullable'],
            'rel_roles.*' => ['nullable', 'uuid', 'exists:ent_roles, id', 'unique:rel_user_role, role'],
        ];
    }
}
