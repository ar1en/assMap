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
            $modelName = $mm->getModelNameByApi($apiName, false);
            $resourceName = $mm->getModelResourceName($modelName);

            if ($modelName && $resourceName) {
                $model = new ($mm->getModelNameByApi($apiName));
                $data = $model::paginate(2);
                $response = response()->json(['data' => ($resourceName)::collection($data)], 200);
            } else $response =  response()->json(['error' => sprintf('Model or resource %s not found', $apiName)], 404);
        } else $response = response()->json(['error' => sprintf('Model %s not found', $apiName)], 404);

        return $response;
    }
}
