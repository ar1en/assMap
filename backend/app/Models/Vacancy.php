<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory, UUID, SoftDeletes;

    protected $table = 'vacancies';
    protected $fillable = [
        'name',
        'type',
        'department',
        'validFrom',
        'validUntil',
        'author',
    ];

    protected static array $validationRules = [
        'name' => ['nullable','string'],
        'type' => ['uuid','exists:vacancies_types,id','required'],
        'department'=> ['uuid','exists:departments,id','required'],
        //'validFrom' => 'data',
        //'validUntil' => 'data',
    ];
    public function getValidationRules(): array {
        return static::$validationRules;
    }

    public function users(): object
    {
        return $this->belongsToMany(User::class, 'user_vacancy', 'vacancy', 'user');
    }

    public function vacancyType(): object
    {
        return $this->belongsTo(VacanciesType::class, 'type','id');
    }
}
