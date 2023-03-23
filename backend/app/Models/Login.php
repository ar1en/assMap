<?php

namespace App\Models;

use App\Traits\HasApiTokensCustom;
use App\Traits\UUID;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#use Laravel\Sanctum\HasApiTokens;

class Login extends Authenticatable
{
    use HasApiTokensCustom, Notifiable, UUID;

    protected $table = 'logins';

    protected $fillable = [
        'user',
        'login',
        'password',
        'author',
        'validFrom',
        'validUntil',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
