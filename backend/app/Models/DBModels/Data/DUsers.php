<?php

namespace App\Models\DBModels\Data;

use App\Models\DBModels\Model\MUsers;
use App\Models\Vacancy;

/**
 * Class DUsers
 * Data class for db table ent_users.
 * @package App\Models\DBModels\Data
 */
class DUsers extends MUsers {
    protected static array $validationRules = [
        'name' => ['required','string'],
        'Vacancy' => ['nullable'],
        'Vacancy.*' => ['nullable','uuid','exists:ent_vacancies,id', 'unique:rel_user_vacancy,vacancy'],
        //'Departments'=> ['uuid','exists:departments,id'],
        //'validFrom' => 'data',
        //'validUntil' => 'data',
    ];
    public function getValidationRules(): array {
        return static::$validationRules;
    }

    public function Vacancy(): object
    {
        return $this->belongsToMany(Vacancy::class, 'rel_user_vacancy', 'user', 'vacancy');
    }
}
