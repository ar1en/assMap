<?php

namespace App\Http\Controllers\api\v1\Universal;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models;

class StoreController2 extends Controller
{
    public function __invoke(String $modelName, Request $request): JsonResponse
    {
        $model = new ('App\Models\\' . $modelName)();
        //$data = $request->input($model);
        //$validatedData = $data->validate($model::validationRules());

        //dump($request);

        $validated = $request->validate($model->getValidationRules());

        dd($validated);
        //return response()->json($validatedData, 200);
    }
}
