<?php

namespace App\Models;

use App\Models\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    use HasFactory;
    use UUID;
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
