<?php

namespace App\Models;


use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;
use app\Traits\UUID;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use UUID;



}
