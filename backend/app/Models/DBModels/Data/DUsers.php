<?php

namespace App\Models\DBModels\Data;

use App\Models\DBModels\Model\MUsers;

/**
 * Class DUsers
 * Data class for db table ent_users.
 * @package App\Models\DBModels\Data
 */
class DUsers extends MUsers {
    protected static array $validationRules = [
        'name' => ['required','string'],
        'relVacancies' => ['nullable'],
        'relVacancies.*' => ['nullable','uuid','exists:ent_vacancies,id', 'unique:rel_user_vacancy,vacancy'],
        'relRoles' => ['nullable'],
        'relRoles.*' => ['nullable', 'uuid', 'exists:ent_roles, id', 'unique:rel_user_role, role'],
    ];
    public function getValidationRules(): array {
        return static::$validationRules;
    }

    public function relVacancies(): object {
        return $this->belongsToMany(DVacancies::class, 'rel_user_vacancy', 'user', 'vacancy')->withTimestamps();
    }

    public function relRoles(): object {
        return $this->belongsToMany(DRoles::class, 'rel_user_role', 'user', 'role')->withTimestamps();
    }
}
