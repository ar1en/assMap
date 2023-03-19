<?php

namespace App\Models;

use App\Models\Traits\UseUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use HasFactory;
    use UseUuid;
    use SoftDeletes;

    protected $table = 'vacancies';
    protected $fillable = [
        'name',
        'type',
        'department',
        'validFrom',
        'validUntil',
        'author',
    ];

    public function users(): object
    {
        return $this->belongsToMany(User::class, 'user_vacancy', 'vacancy', 'user');
    }

    public function vacancyType(): object
    {
        return $this->belongsTo(VacanciesType::class, 'type','id');
    }
}
