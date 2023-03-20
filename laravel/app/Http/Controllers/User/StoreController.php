<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = $request->input('users');
        foreach($users as $user) {
            $item = User::create([
                'name'=> $user['name'],
                #'vacancy'=> $user['vacancy'],
                'author'=> $user['author'],
            ]);
            $item->vacancies()->attach($user['vacancy']);
        }
        return response()->json(['message' => "ok"]);
    }
}
