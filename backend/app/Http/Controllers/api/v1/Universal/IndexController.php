<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Http\Controllers\Controller;
use App\Singletons\ModelManager;
Use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    /**
     * @throws \ReflectionException
     */
    public function __invoke($apiName):JsonResponse {
        $mm = ModelManager::getInstance();
        if ($mm->modelExistsByApi($apiName)) {
            $modelName = $mm->getModelNameByApi($apiName);
            $model = $mm->getModelInstancePath($modelName)::all();
            $resource = $mm->getModelResource($model, 'Default');
            dd($resource);
            return $resource;
            //return response()->json(['data' => $mm->getModelInstancePath($modelName)::all()], 200);
        } else return response()->json(['message' => sprintf('Model %s not found', $apiName)], 404);

        /*$model = "App\Models\\" . $model;
        if(class_exists($model)) {
            return response()->json(['data' => $model::all()], 200);
        } else {
            return response()->json(['message' => sprintf('Model %s not found', $model)], 404);
        }*/

    }
}
