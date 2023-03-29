<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Http\Controllers\Controller;
Use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function __invoke($model):JsonResponse {
        $model = "App\Models\\" . $model;
        if(class_exists($model)) {
            return response()->json(['data' => $model::all()], 200);
        } else {
            return response()->json(['message' => sprintf('Model %s not found', $model)], 404);
        }
    }
}
