<?php

namespace App\Models\DBModels\Data;

use App\Models\DBModels\Model\MVacancies;
use App\Models\VacancyType;

/**
 * Class DVacancies
 * Data class for db table ent_vacancies.
 * @package App\Models\DBModels\Data
 */
class DVacancies extends MVacancies {

    protected static array $validationRules = [
        'desc' => ['nullable','string'],
        'vacancies_types' => ['uuid','exists:ent_vacancies_types,id','required'],
        'departments'=> ['uuid','exists:ent_departments,id'],
        'department'=> ['uuid','exists:ent_departments,id'],
        //'validFrom' => 'data',
        //'validUntil' => 'data',
    ];

    public function getValidationRules(): array {
        return static::$validationRules;
    }

    public function Departments(): object {
        return $this->belongsTo(DDepartments::class, 'department', 'id');
    }

    public function VacanciesTypes(): object {
        return $this->belongsTo(DVacanciesTypes::class, 'type','id');
    }
}
