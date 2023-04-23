<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Http\Controllers\Controller;
use App\Singletons\ModelManager;
Use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @throws \ReflectionException
     */
    public function __invoke(String $apiName, Request $request, String $resourceType = 'Default') {

        $mm = ModelManager::getInstance();
        $modelName = $mm->getModelNameByApi($apiName, false);
        $resourceName = $mm->getModelResourceName($modelName, true, $resourceType);

        if (!$modelName or !$resourceName) {
            return response()->json(['error' => sprintf('Model or Resource not found for <%s>', $apiName)], 404);
        }

        $model = $mm->getModelNameByApi($apiName)::with('roles')
            ->paginate(request('per-page'));
        //dump($model);
        //dump($model->toArray());
        return ($resourceName)::collection($model);
    }
}
