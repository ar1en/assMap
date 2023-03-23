<?php

namespace App\Models;

use App\Models\Traits\UUID;
#use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
class Login extends Authenticatable
{
    use HasApiTokens, Notifiable, UUID, SoftDeletes;

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
