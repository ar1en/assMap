<?php

namespace App\Http\Controllers\api\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke($id){
        $user = User::find($id);
        if (!$user) return response()->json(['error' => sprintf("User with id:%s not found", $id)]);
        dump($id);
        dump($user);
        return response()->json($user);
    }
}
