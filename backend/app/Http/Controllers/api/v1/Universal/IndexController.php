<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Http\Controllers\Controller;
use App\Singletons\ModelManager;
use Illuminate\Http\Request;
use ReflectionException;

class IndexController extends Controller
{
    /**
     * @throws ReflectionException
     */
    public function __invoke(String $apiName, Request $request, String $resourceType = 'Default') {

        $mm = ModelManager::getInstance();
        $modelName = $mm->getModelNameByApi($apiName, false);
        $resourceName = $mm->getModelResourceName($modelName, true, $resourceType);

        if (!$modelName or !$resourceName) {
            return response()->json(['error' => sprintf('Model or Resource not found for <%s>', $apiName)], 404);
        }

        $model = $mm->getModelNameByApi($apiName)::with($this->withArray())
            ->paginate(request('per-page'));

        return ($resourceName)::collection($model);
    }

    private function withArray(): array{
        return request('with', []);
    }
}
