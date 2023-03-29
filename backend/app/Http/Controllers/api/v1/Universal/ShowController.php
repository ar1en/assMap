<?php

namespace App\Http\Controllers\api\v1\Universal;

Use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($model, $id): JsonResponse {
        $model = "App\Models\\" . $model;
        if(class_exists($model)) {
            $data = $model::find($id);
            if (!$data) return response()->json(['error' => sprintf("%s with id:%s not found",$model, $id)]);
            return response()->json(['data' => $data], 200);
        }else{
            return response()->json(['message' => sprintf('Model %s not found', $model)], 404);
        }
    }
}
