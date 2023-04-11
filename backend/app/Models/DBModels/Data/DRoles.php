<?php

namespace App\Models\DBModels\Data;

use App\Models\DBModels\Model\MRoles;

/**
 * Class DRoles
 * Data class for db table ent_roles.
 * @package App\Models\DBModels\Data
 */
class DRoles extends MRoles {
    protected static array $validationRules = [
        'parentRole' => ['nullable','uuid'],
        'department' => ['nullable', 'uuid'],
        'object' => ['nullable', 'uuid'],
        'process' => ['nullable', 'uuid'],
        'name' => ['required', 'string'],
        'relUsers' => ['nullable'],
        'relUsers.*' => ['nullable','uuid','exists:ent_vacancies,id', 'unique:rel_user_vacancy,vacancy'],
    ];
    public function getValidationRules(): array {
        return static::$validationRules;
    }

    public function relUsers(): object {
        return $this->belongsToMany(DUsers::class, 'rel_user_role', 'user')->withTimestamps();
    }
}
