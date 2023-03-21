<?php

namespace App\Http\Controllers\api\v1\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        /*$index=User::find('30b0310d-15bd-41b4-bd1d-17d5a875a6f6');
        //dd($index->users);
        dump($index->name);
        foreach ($index->vacancies as $item)
        {
            dd($item->vacancyType->name);
        }*/
        $users=User::all();
        return response()->json($users);
    }
}
