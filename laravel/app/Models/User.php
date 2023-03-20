<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\useUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use UseUuid;
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'author',
    ];

    public function vacancies(): object
    {
        return $this->belongsToMany(Vacancy::class, 'user_vacancy', 'user','vacancy');
    }
}
