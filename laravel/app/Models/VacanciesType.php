<?php

namespace App\Models;

use App\Models\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VacanciesType extends Model
{
    use HasFactory;
    use UUID;
    use SoftDeletes;

    protected $table = 'vacancies_types';
    protected $fillable = [
        'name',
        'author',
    ];
}
