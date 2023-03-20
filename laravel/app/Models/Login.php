<?php

namespace App\Models;

use App\Models\Traits\UseUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    use HasFactory;
    use UseUuid;
    use SoftDeletes;

    protected $table = 'logins';

    protected $fillable = [
        'user',
        'login',
        'password',
        'author',
        'validFrom',
        'validUntil',
    ];
}
